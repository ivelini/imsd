import ImputComponent from "./ImputComponent.jsx";
import {useEffect, useState} from "react";

export default function Params({ params, changeFilter}) {

    return (
        <>
            <ImputComponent name="Ширина" type="width" values={params.width} onChange={changeFilter} />
            <ImputComponent name="Профиль" type="height" values={params.height} onChange={changeFilter} />
            <ImputComponent name="Диаметр" type="diameter" values={params.diameter} onChange={changeFilter} />
        </>
    )
}
