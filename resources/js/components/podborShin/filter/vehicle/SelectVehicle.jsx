import {useRef} from "react";
import styles from "../../PodborShinMain.module.css"

export default function SelectVehicle({ name, type, values, onChange, query}) {
    let selectRef = useRef(null)

    setTimeout(() => {
        if(query[type] != null) {
            selectRef.current.value = query[type]
        }
    }, 10)


    return (
        <>
            <div className="custom-select-wrapper custom-select-wrapper-cat">
                <select className={`custom-select custom-select-cat ${values.length == 0 && styles.selectedDisabled}`}
                        ref={selectRef}
                        id="catalog-widthSelect"
                        onChange={(e) => onChange(type, e.target.value)}
                        disabled={values.length == 0}>
                    <option value="0">{ name }</option>
                    {
                        values.map((el, index) => <option value={el.id != 'undefined' ? el.id : el.name } key={index}>{ el.name }</option>)
                    }
                </select>
                <div className="select-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                        <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" strokeLinecap="round"/>
                    </svg>
                </div>
            </div>
        </>
    )
}
