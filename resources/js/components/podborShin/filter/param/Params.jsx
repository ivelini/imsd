import {useEffect, useState} from "react";
import SelectParam from "./SelectParam.jsx";


export default function Params({upSetQueryString, setUpIsPushButton}) {
    // Параметры для показа фильтра
    const [params, setParams] = useState({})
    //Параметры для формирования запроса
    const [query, setQuery] = useState({})

    useEffect(() => {
        fetch(import.meta.env.VITE_APP_URL + '/api/list/filter/tire')
            .then((response) => response.json())
            .then((json) => setParams(json.data))
    }, [])


    /**
     * Добавляем параметр для формирования запроса
     * @param {number} type
     * @param {*} value
     */
    function handleChangeQuery(type, value) {
        let nextQuery = {...query}
        value != 0 ? nextQuery[type] = value : delete nextQuery[type]
        setQuery(nextQuery)

        prepareQueryAndUp(nextQuery)
    }

    // Отправляем модифицированную строку запроса выше в компонент
    function prepareQueryAndUp (nextQuery)  {
        let queryString = ''

        for (const key in nextQuery) {
            queryString += key + '|' + nextQuery[key] + ';'
        }

        upSetQueryString(queryString.length > 0 ? '?filters=' + queryString.slice(0,queryString.length - 1) : '')
        // Разрешаем кнопке всегда быть активной
        setUpIsPushButton(true)
    }

    return (
        <>
            {
                Object.keys(params).length > 0 && (
                    <>
                        <SelectParam key="width" name="Ширина" type="width" values={params.width} onChange={handleChangeQuery}/>
                        <SelectParam key="height" name="Профиль" type="height" values={params.height} onChange={handleChangeQuery}/>
                        <SelectParam key="diameter" name="Диаметр" type="diameter" values={params.diameter} onChange={handleChangeQuery}/>
                        <SelectParam key="season" name="Сезонность" type="season" values={params.season} onChange={handleChangeQuery}/>
                        <SelectParam key="is_spike" name="Тип шин" type="is_spike" values={params.is_spike} onChange={handleChangeQuery}/>
                        <SelectParam key="vendor" name="Производитель" type="vendor" values={params.vendor} onChange={handleChangeQuery}/>
                        <SelectParam key="country" name="Страна" type="country" values={params.country} onChange={handleChangeQuery}/>
                    </>
                )
            }
        </>
    )
}
