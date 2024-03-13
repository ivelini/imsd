import SidebarFilter from "./SidebarFilter.jsx";
import FilteredContent from "./FilteredContent.jsx";
import {useEffect, useState} from "react";
import styles from "./PodborShinMain.module.css"

export default function PodborShinMain() {
    // const [dataContent, setDataContent] = useState({items: [], filterTitle: '', totalItems: 0})
    // const [filterParamsForTitle, setFilterParamsForTitle] = useState('')
    //
    // useEffect(() => {
    //     getFilteredContent('')
    // }, [])
    //
    async function getFilteredContent(queryFilter = '', typeFilter = 'param') {

        // let url = typeFilter == 'param' ? import.meta.env.VITE_APP_URL + '/api/tire' + queryFilter : import.meta.env.VITE_APP_URL + '/api/vehicle/tire' + queryFilter
        //
        // console.log(typeFilter, url)
        // let response = await fetch(url)
        // let responseData = await response.json()
        //
        // setDataContent({...dataContent, items: responseData.data, totalItems: responseData.meta.total})
    }

    return (
        // <>
        //     <h2>Шины <span className={styles.filterTitle}>{dataContent.filterTitle}</span> <span className={styles.totalCount}>Найдено {dataContent.totalItems} товаров</span></h2>
        //     <div className="main-content-catalog">
        //         <div className="catalog-panel">
        //             <a className="catalog-panel-filters" href="#">
        //                 <svg className="1st" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
        //                      viewBox="0 0 10 10" fill="none">
        //                     <path
        //                         d="M10 1.36364C10 1.48419 9.95211 1.59981 9.86687 1.68505C9.78162 1.77029 9.66601 1.81818 9.54545 1.81818H8.18182C8.06126 1.81818 7.94565 1.77029 7.86041 1.68505C7.77516 1.59981 7.72727 1.48419 7.72727 1.36364C7.72727 1.24309 7.77516 1.12747 7.86041 1.04223C7.94565 0.956983 8.06126 0.909093 8.18182 0.909093H9.54545C9.66601 0.909093 9.78162 0.956983 9.86687 1.04223C9.95211 1.12747 10 1.24309 10 1.36364ZM0.454545 0.909093H4.17455C4.28177 0.605814 4.49276 0.350205 4.77022 0.187443C5.04768 0.0246807 5.37374 -0.0347549 5.69079 0.0196411C6.00783 0.0740371 6.29544 0.238762 6.50278 0.484703C6.71011 0.730643 6.82383 1.04196 6.82383 1.36364C6.82383 1.68531 6.71011 1.99663 6.50278 2.24257C6.29544 2.48851 6.00783 2.65324 5.69079 2.70764C5.37374 2.76203 5.04768 2.7026 4.77022 2.53983C4.49276 2.37707 4.28177 2.12146 4.17455 1.81818H0.454545C0.333993 1.81818 0.218377 1.77029 0.133133 1.68505C0.0478895 1.59981 0 1.48419 0 1.36364C0 1.24309 0.0478895 1.12747 0.133133 1.04223C0.218377 0.956983 0.333993 0.909093 0.454545 0.909093ZM5 1.36364C5 1.45354 5.02666 1.54142 5.0766 1.61617C5.12655 1.69092 5.19754 1.74918 5.2806 1.78358C5.36366 1.81799 5.45505 1.82699 5.54322 1.80945C5.6314 1.79191 5.71239 1.74862 5.77596 1.68505C5.83953 1.62148 5.88282 1.54049 5.90036 1.45232C5.9179 1.36414 5.90889 1.27275 5.87449 1.18969C5.84009 1.10663 5.78183 1.03564 5.70708 0.985698C5.63233 0.935752 5.54445 0.909093 5.45455 0.909093C5.33399 0.909093 5.21838 0.956983 5.13313 1.04223C5.04789 1.12747 5 1.24309 5 1.36364ZM0 5C0 4.87945 0.0478895 4.76383 0.133133 4.67859C0.218377 4.59334 0.333993 4.54546 0.454545 4.54546H2.35636C2.46359 4.24218 2.67458 3.98657 2.95204 3.82381C3.2295 3.66104 3.55556 3.60161 3.87261 3.656C4.18965 3.7104 4.47726 3.87512 4.68459 4.12106C4.89193 4.367 5.00565 4.67832 5.00565 5C5.00565 5.32168 4.89193 5.633 4.68459 5.87894C4.47726 6.12488 4.18965 6.2896 3.87261 6.344C3.55556 6.39839 3.2295 6.33896 2.95204 6.1762C2.67458 6.01343 2.46359 5.75782 2.35636 5.45455H0.454545C0.333993 5.45455 0.218377 5.40666 0.133133 5.32141C0.0478895 5.23617 0 5.12055 0 5ZM3.18182 5C3.18182 5.0899 3.20848 5.17778 3.25842 5.25253C3.30837 5.32728 3.37936 5.38554 3.46242 5.41995C3.54547 5.45435 3.63687 5.46335 3.72504 5.44581C3.81321 5.42827 3.89421 5.38498 3.95778 5.32141C4.02135 5.25784 4.06464 5.17685 4.08218 5.08868C4.09971 5.0005 4.09071 4.90911 4.05631 4.82605C4.02191 4.743 3.96365 4.67201 3.8889 4.62206C3.81415 4.57211 3.72626 4.54546 3.63636 4.54546C3.51581 4.54546 3.4002 4.59334 3.31495 4.67859C3.22971 4.76383 3.18182 4.87945 3.18182 5ZM9.54545 4.54546H6.36364C6.24308 4.54546 6.12747 4.59334 6.04222 4.67859C5.95698 4.76383 5.90909 4.87945 5.90909 5C5.90909 5.12055 5.95698 5.23617 6.04222 5.32141C6.12747 5.40666 6.24308 5.45455 6.36364 5.45455H9.54545C9.66601 5.45455 9.78162 5.40666 9.86687 5.32141C9.95211 5.23617 10 5.12055 10 5C10 4.87945 9.95211 4.76383 9.86687 4.67859C9.78162 4.59334 9.66601 4.54546 9.54545 4.54546ZM9.54545 8.18182H7.27273C7.15217 8.18182 7.03656 8.22971 6.95131 8.31495C6.86607 8.40019 6.81818 8.51581 6.81818 8.63636C6.81818 8.75692 6.86607 8.87253 6.95131 8.95777C7.03656 9.04302 7.15217 9.09091 7.27273 9.09091H9.54545C9.66601 9.09091 9.78162 9.04302 9.86687 8.95777C9.95211 8.87253 10 8.75692 10 8.63636C10 8.51581 9.95211 8.40019 9.86687 8.31495C9.78162 8.22971 9.66601 8.18182 9.54545 8.18182ZM0 8.63636C0 8.51581 0.0478895 8.40019 0.133133 8.31495C0.218377 8.22971 0.333993 8.18182 0.454545 8.18182H3.26545C3.37268 7.87854 3.58367 7.62293 3.86113 7.46017C4.13859 7.2974 4.46465 7.23797 4.7817 7.29237C5.09874 7.34676 5.38635 7.51149 5.59368 7.75743C5.80102 8.00337 5.91474 8.31469 5.91474 8.63636C5.91474 8.95804 5.80102 9.26936 5.59368 9.5153C5.38635 9.76124 5.09874 9.92596 4.7817 9.98036C4.46465 10.0348 4.13859 9.97532 3.86113 9.81256C3.58367 9.6498 3.37268 9.39419 3.26545 9.09091H0.454545C0.333993 9.09091 0.218377 9.04302 0.133133 8.95777C0.0478895 8.87253 0 8.75692 0 8.63636ZM4.09091 8.63636C4.09091 8.72626 4.11757 8.81414 4.16751 8.88889C4.21746 8.96364 4.28845 9.0219 4.37151 9.05631C4.45457 9.09071 4.54596 9.09971 4.63413 9.08217C4.72231 9.06463 4.8033 9.02134 4.86687 8.95777C4.93044 8.89421 4.97373 8.81321 4.99127 8.72504C5.0088 8.63687 4.9998 8.54547 4.9654 8.46242C4.931 8.37936 4.87274 8.30837 4.79799 8.25842C4.72324 8.20848 4.63536 8.18182 4.54545 8.18182C4.4249 8.18182 4.30929 8.22971 4.22404 8.31495C4.1388 8.40019 4.09091 8.51581 4.09091 8.63636Z"
        //                         fill="white"
        //                     />
        //                 </svg>
        //
        //                 Фильтры
        //             </a>
        //             <a href="#" className="catalog-panel-defaults">По умолчанию</a>
        //         </div>
        //     <SidebarFilter getFilteredContent={getFilteredContent}/>
        //     <FilteredContent items={dataContent.items}/>
        //     </div>
        // </>
    <>
        <h2>Шины <span className='asas'>asas</span> </h2>
        <div className="main-content-catalog">
            <div className="catalog-panel">
                <a className="catalog-panel-filters" href="#">
                    <svg className="1st" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                         viewBox="0 0 10 10" fill="none">
                        <path
                            d="M10 1.36364C10 1.48419 9.95211 1.59981 9.86687 1.68505C9.78162 1.77029 9.66601 1.81818 9.54545 1.81818H8.18182C8.06126 1.81818 7.94565 1.77029 7.86041 1.68505C7.77516 1.59981 7.72727 1.48419 7.72727 1.36364C7.72727 1.24309 7.77516 1.12747 7.86041 1.04223C7.94565 0.956983 8.06126 0.909093 8.18182 0.909093H9.54545C9.66601 0.909093 9.78162 0.956983 9.86687 1.04223C9.95211 1.12747 10 1.24309 10 1.36364ZM0.454545 0.909093H4.17455C4.28177 0.605814 4.49276 0.350205 4.77022 0.187443C5.04768 0.0246807 5.37374 -0.0347549 5.69079 0.0196411C6.00783 0.0740371 6.29544 0.238762 6.50278 0.484703C6.71011 0.730643 6.82383 1.04196 6.82383 1.36364C6.82383 1.68531 6.71011 1.99663 6.50278 2.24257C6.29544 2.48851 6.00783 2.65324 5.69079 2.70764C5.37374 2.76203 5.04768 2.7026 4.77022 2.53983C4.49276 2.37707 4.28177 2.12146 4.17455 1.81818H0.454545C0.333993 1.81818 0.218377 1.77029 0.133133 1.68505C0.0478895 1.59981 0 1.48419 0 1.36364C0 1.24309 0.0478895 1.12747 0.133133 1.04223C0.218377 0.956983 0.333993 0.909093 0.454545 0.909093ZM5 1.36364C5 1.45354 5.02666 1.54142 5.0766 1.61617C5.12655 1.69092 5.19754 1.74918 5.2806 1.78358C5.36366 1.81799 5.45505 1.82699 5.54322 1.80945C5.6314 1.79191 5.71239 1.74862 5.77596 1.68505C5.83953 1.62148 5.88282 1.54049 5.90036 1.45232C5.9179 1.36414 5.90889 1.27275 5.87449 1.18969C5.84009 1.10663 5.78183 1.03564 5.70708 0.985698C5.63233 0.935752 5.54445 0.909093 5.45455 0.909093C5.33399 0.909093 5.21838 0.956983 5.13313 1.04223C5.04789 1.12747 5 1.24309 5 1.36364ZM0 5C0 4.87945 0.0478895 4.76383 0.133133 4.67859C0.218377 4.59334 0.333993 4.54546 0.454545 4.54546H2.35636C2.46359 4.24218 2.67458 3.98657 2.95204 3.82381C3.2295 3.66104 3.55556 3.60161 3.87261 3.656C4.18965 3.7104 4.47726 3.87512 4.68459 4.12106C4.89193 4.367 5.00565 4.67832 5.00565 5C5.00565 5.32168 4.89193 5.633 4.68459 5.87894C4.47726 6.12488 4.18965 6.2896 3.87261 6.344C3.55556 6.39839 3.2295 6.33896 2.95204 6.1762C2.67458 6.01343 2.46359 5.75782 2.35636 5.45455H0.454545C0.333993 5.45455 0.218377 5.40666 0.133133 5.32141C0.0478895 5.23617 0 5.12055 0 5ZM3.18182 5C3.18182 5.0899 3.20848 5.17778 3.25842 5.25253C3.30837 5.32728 3.37936 5.38554 3.46242 5.41995C3.54547 5.45435 3.63687 5.46335 3.72504 5.44581C3.81321 5.42827 3.89421 5.38498 3.95778 5.32141C4.02135 5.25784 4.06464 5.17685 4.08218 5.08868C4.09971 5.0005 4.09071 4.90911 4.05631 4.82605C4.02191 4.743 3.96365 4.67201 3.8889 4.62206C3.81415 4.57211 3.72626 4.54546 3.63636 4.54546C3.51581 4.54546 3.4002 4.59334 3.31495 4.67859C3.22971 4.76383 3.18182 4.87945 3.18182 5ZM9.54545 4.54546H6.36364C6.24308 4.54546 6.12747 4.59334 6.04222 4.67859C5.95698 4.76383 5.90909 4.87945 5.90909 5C5.90909 5.12055 5.95698 5.23617 6.04222 5.32141C6.12747 5.40666 6.24308 5.45455 6.36364 5.45455H9.54545C9.66601 5.45455 9.78162 5.40666 9.86687 5.32141C9.95211 5.23617 10 5.12055 10 5C10 4.87945 9.95211 4.76383 9.86687 4.67859C9.78162 4.59334 9.66601 4.54546 9.54545 4.54546ZM9.54545 8.18182H7.27273C7.15217 8.18182 7.03656 8.22971 6.95131 8.31495C6.86607 8.40019 6.81818 8.51581 6.81818 8.63636C6.81818 8.75692 6.86607 8.87253 6.95131 8.95777C7.03656 9.04302 7.15217 9.09091 7.27273 9.09091H9.54545C9.66601 9.09091 9.78162 9.04302 9.86687 8.95777C9.95211 8.87253 10 8.75692 10 8.63636C10 8.51581 9.95211 8.40019 9.86687 8.31495C9.78162 8.22971 9.66601 8.18182 9.54545 8.18182ZM0 8.63636C0 8.51581 0.0478895 8.40019 0.133133 8.31495C0.218377 8.22971 0.333993 8.18182 0.454545 8.18182H3.26545C3.37268 7.87854 3.58367 7.62293 3.86113 7.46017C4.13859 7.2974 4.46465 7.23797 4.7817 7.29237C5.09874 7.34676 5.38635 7.51149 5.59368 7.75743C5.80102 8.00337 5.91474 8.31469 5.91474 8.63636C5.91474 8.95804 5.80102 9.26936 5.59368 9.5153C5.38635 9.76124 5.09874 9.92596 4.7817 9.98036C4.46465 10.0348 4.13859 9.97532 3.86113 9.81256C3.58367 9.6498 3.37268 9.39419 3.26545 9.09091H0.454545C0.333993 9.09091 0.218377 9.04302 0.133133 8.95777C0.0478895 8.87253 0 8.75692 0 8.63636ZM4.09091 8.63636C4.09091 8.72626 4.11757 8.81414 4.16751 8.88889C4.21746 8.96364 4.28845 9.0219 4.37151 9.05631C4.45457 9.09071 4.54596 9.09971 4.63413 9.08217C4.72231 9.06463 4.8033 9.02134 4.86687 8.95777C4.93044 8.89421 4.97373 8.81321 4.99127 8.72504C5.0088 8.63687 4.9998 8.54547 4.9654 8.46242C4.931 8.37936 4.87274 8.30837 4.79799 8.25842C4.72324 8.20848 4.63536 8.18182 4.54545 8.18182C4.4249 8.18182 4.30929 8.22971 4.22404 8.31495C4.1388 8.40019 4.09091 8.51581 4.09091 8.63636Z"
                            fill="white"
                        />
                    </svg>

                    Фильтры
                </a>
                <a href="#" className="catalog-panel-defaults">По умолчанию</a>
            </div>
            <SidebarFilter getFilteredContent={getFilteredContent}/>
            {/*<FilteredContent items={dataContent.items}/>*/}
        </div>
    </>
    )
}
