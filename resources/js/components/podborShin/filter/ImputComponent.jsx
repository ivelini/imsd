import {useEffect, useRef} from "react";

export default function ImputComponent({ name, type, values, onChange }) {

    let selectRef = useRef(null)

     useEffect(() => {
         selectRef.current.addEventListener('change', (e) => onChange(type, e.target.value))
     }, [])

    return (
        <>
            <div className="custom-select-wrapper custom-select-wrapper-cat">
                <select className="custom-select custom-select-cat" id="catalog-widthSelect" ref={selectRef}>
                    <option value="0">{ name }</option>
                    {
                        values.map((el, index) => <option value={el.id} key={index}>{ el.name }</option>)
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
