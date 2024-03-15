import {useEffect, useRef} from "react";
import styles from "../../PodborShinMain.module.css"

export default function SelectParam({ name, type, values, onChange}) {
    return (
        <>
            <div className="custom-select-wrapper custom-select-wrapper-cat">
                <select className="custom-select custom-select-cat"
                        id="catalog-widthSelect"
                        onChange={(e) => onChange(type, e.target.value)}
                >
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
