import ImputComponent from "./filter/ImputComponent.jsx";
import {useEffect, useState} from "react";
import Params from "./filter/Params.jsx";
import Vehicle from "./filter/Vehicle.jsx";

export default function SidebarFilter({ getFilteredContent }) {
    const [data, setData] = useState({ type:'param', params: {}, filter: {} })

    useEffect(() => {
        fetch(import.meta.env.VITE_APP_URL + '/api/list/filter/tire')
            .then((response) => response.json())
            .then((json) => setData({...data, params: json.data}))
    }, [])

    console.log('state', data)
    /**
     * Добавляем или убираем параметры для фильтра
     */
    function changeFilter(type, value)  {
        console.log('1', type, value)
        let chengetFilter = data.filter

        value == 0 ? delete chengetFilter[type] : chengetFilter[type] = value

        setData({...data, filter: chengetFilter})
    }

    function prepareFilter(filters) {
        let query = ''
        for (const key in filters) {
            query += key + '|' + filters[key] + ';'
        }

        query =  query.slice(0,query.length - 1)

        return query.length > 0 ? '?filters=' + query : ''
    }

    return (
        <div className="catalog-filter" id="filter-in-catalog">
            <div className="catalog-filter-category">
                <div className={`filter-item-catalog ${data.type !== 'param' && 'inactive'}`} id="paramFilter" onClick={() => setData({ ...data, type:"param"})}>По параметрам</div>
                <div className={`filter-item-catalog ${data.type !== 'car' && 'inactive'}`} id="carFilter" onClick={() => setData({ ...data, type:"car"})}>По автомобилю</div>
            </div>
            <div className="catalog-filter-cont">

                {(Object.keys(data.params).length > 0) && (
                    <>
                        <div className="calatog-select-col">

                            { data.type === "param" ? <Params params={ data.params }  changeFilter={changeFilter} /> : <Vehicle /> }

                            <ImputComponent name="Сезонность" type="season" values={data.params.season} onChange={changeFilter} />
                            <ImputComponent name="Тип шин" type="is_spike" values={data.params.is_spike} onChange={changeFilter} />
                            <ImputComponent name="Производитель" type="vendor" values={data.params.vendor} onChange={changeFilter} />
                            <ImputComponent name="Страна" type="country" values={data.params.country} onChange={changeFilter} />
                        </div>
                    </>
                )}

                <button className="get-result" type="button" onClick={() => getFilteredContent(prepareFilter(data.filter), data.type)}>Подобрать</button>
                <a href="#" className="remove-filters help" onClick={() => setData({...data, filter: {}})}>Сбросить все фильтры</a>
            </div>
        </div>
    )
}
