import {useEffect, useState} from "react";
import SelectVehicle from "./SelectVehicle.jsx";


export default function Vehicle({upSetQueryString, setUpIsPushButton}) {
    // Объект параметров запроса для вывода фильтра
    const [query, setQuery] = useState({})
    // Объект параметров для вывода фильтра
    const [params, setParams] = useState({})

    // Запуск получения параметров фильтра при изменении запроса для вывода фильтра
    useEffect(() => {
        getParams()
    }, [query])


    // Метод получения параметров для вывода фильтра
    async function getParams() {

        let url = import.meta.env.VITE_APP_URL + '/api/list/filter/vehicle/tire/info'
        let params = new URLSearchParams(query).toString()

        url += params.length > 0 ? '?' + params : ''

        let res = await fetch(url, {headers: {'Accept': 'application/json'}})
        let resdata = await res.json()

        if(res.status == 200) {
            setParams(resdata.data)
        }
    }

    // Обработка параметров запроса для получения фильтра
    function handleChangeQuery(type, value) {
        let nextQuery = {...query}

        switch (type) {
            case 'vendor':
                nextQuery = (value == 0) ?
                    {} :
                    {vendor: value}
                break
            case 'model':
                nextQuery = (value == 0) ?
                    {vendor: nextQuery.vendor} :
                    {vendor: nextQuery.vendor, model: value}
                break
            case 'year':
                nextQuery = (value == 0) ?
                    {vendor: nextQuery.vendor, model: nextQuery.model} :
                    {vendor: nextQuery.vendor, model: nextQuery.model, year: value}
                break
            case 'modification':
                nextQuery = (value == 0) ?
                    {vendor: nextQuery.vendor, model: nextQuery.model, year: nextQuery.year} :
                    {vendor: nextQuery.vendor, model: nextQuery.model, year: nextQuery.year, modification: value}
                break
        }

        setQuery(nextQuery)

        prepareQueryAndUp(nextQuery)
    }

    // Отправляем модифицированную строку запроса выше в компонент
    function prepareQueryAndUp (nextQuery)  {

        if(Object.keys(nextQuery).length == 4) {
            let queryString = new URLSearchParams(nextQuery)
            upSetQueryString('?' + queryString.toString())
            setUpIsPushButton(true)
        }
    }

    return (
        <>
            {Object.keys(params).length > 0 && (
                <>
                    <SelectVehicle key="vendor"
                                    name="Марка"
                                    type="vendor"
                                    values={params.vendor}
                                    onChange={handleChangeQuery}
                                    query={query}

                    />
                    <SelectVehicle key={query.model != null ? query.model : 'model'}
                                   name="Модель"
                                   type="model"
                                   values={params.model != null ? params.model : []}
                                   onChange={handleChangeQuery}
                                   query={query}
                    />
                    <SelectVehicle key={query.year != null ? query.year : 'year'}
                                   name="Год выпуска"
                                   type="year"
                                   values={params.year != null ? params.year : []}
                                   onChange={handleChangeQuery}
                                   query={query}
                    />
                    <SelectVehicle key={query.modification != null ? query.modification : 'modification'}
                                   name="Модификация"
                                   type="modification"
                                   values={params.modification != null ? params.modification : []}
                                   onChange={handleChangeQuery}
                                   query={query}
                    />
                </>
            )}
        </>
    )
}
