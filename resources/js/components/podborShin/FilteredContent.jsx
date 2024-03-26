import HorisontalItem from "./content/HorisontalItem.jsx";
import VehicleContent from "./content/vehicle/VehicleContent.jsx";
import styles from './PodborShinMain.module.css'
import {useRef} from "react";

export default function FilteredContent({ params, getFilteredContent }) {


    setTimeout(() => {
        window.scrollTo(0,0)
    }, 50)

    return (<>
        {params.typeFilter == 'param' && (
            <div className="catalog-with-products">
                {params.items.length > 0 ?
                    params.items.map((item, index) => <HorisontalItem item={item} key={index} />) :
                    'К сожалению, ничего не найдено. Попробуйте ввести другие параметры'}

                {/*Пагинация*/}
                {params.links.length > 3 && (
                    <div className={styles.paginationBlock}>
                        {params.links.map((link, index) => (
                            link.url != null ?
                                <span className={styles.paginationLink}>
                                    <button className={link.active && styles.paginationLinkActive} onClick={() => getFilteredContent((new URL(link.url)).search)}>{link.label}</button>
                                </span> :
                                (index != 0 && index != params.links.length - 1) && <span className={styles.paginationLink}>{link.label}</span>
                        ))}
                    </div>
                )}

            </div>
        )}
        {params.typeFilter == 'car' && (
            <div className="catalog-with-products">
                <VehicleContent key={params.params.default[0].id} data={params}/>
            </div>
        )}
    </>)
}
