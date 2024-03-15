import {StrictMode, useEffect, useState} from "react";
import Params from "./filter/param/Params.jsx";
import Vehicle from "./filter/vehicle/Vehicle.jsx";

/**
 * Добавляем или убираем параметры для фильтра
 */
export default function SidebarFilter({ getFilteredContent }) {
    //Выбранный тип фильтра
    const [typeFilter, setTypeFilter] = useState('param')
    // Строка запроса для вывода отфильтрованного контента
    const [queryString, setQueryString] = useState('')
    const [isPushButton, setIsPushButton] = useState(false)

    return (
        <div className="catalog-filter" id="filter-in-catalog">
            <div className="catalog-filter-category">
                <div className={`filter-item-catalog ${typeFilter == "car" && `inactive`}`}
                     id="paramFilter"
                     onClick={() => {
                         setTypeFilter('param')
                         setIsPushButton(true)
                     }}
                >По параметрам
                </div>
                <div className={`filter-item-catalog ${typeFilter == "param" && `inactive`}`}
                     id="carFilter"
                     onClick={() => {
                         setTypeFilter('car')
                         setIsPushButton(false)
                     }}
                >По автомобилю
                </div>
            </div>

            <div className="catalog-filter-cont">

                <div className="calatog-select-col">
                    <>
                        {typeFilter === "param" ?
                            <Params upSetQueryString={(queryString) => setQueryString(queryString)}
                                    setUpIsPushButton={(status) => setIsPushButton(status)}
                            /> :
                            <Vehicle upSetQueryString={(queryString) => setQueryString(queryString)}
                                     setUpIsPushButton={(status) => setIsPushButton(status)}
                            />
                        }
                    </>
                </div>

                <button className="get-result"
                        type="button"
                        onClick={() => getFilteredContent(queryString, typeFilter)}
                        disabled={!isPushButton}
                >Подобрать
                </button>
                <a href="#" className="remove-filters help">Сбросить все фильтры</a>
            </div>
        </div>
    )
}

