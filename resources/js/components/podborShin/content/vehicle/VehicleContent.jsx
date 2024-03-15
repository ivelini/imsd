import {useEffect, useState} from "react";
import Specifications from "./Specifications.jsx";


export default function VehicleContent({data}) {
    // Массив ID спецификаций для подбора шин
    const [vehicleIds, setVehicleIds] = useState([data.params.default[0].id])
    // Коллекция шин для массива спецификаций
    const [collection, setCollection] = useState({})

    let specifications = {
        default: data.params.default?.map((el) => {return {id: el.id, name: el.name}}),
        alternate: data.params.alternate?.map((el) => {return {id: el.id, name: el.name}}),
        tuning: data.params.tuning?.map((el) => {return {id: el.id, name: el.name}})
    }

    useEffect(() => {
        const getItems = async () => {
            let url = import.meta.env.VITE_APP_URL + '/api/vehicle/tire?filters=vehicle|' + vehicleIds.join(',')

            try {
                let res = await fetch(url, {headers: {'Accept': 'application/json'}})
                let resData = await res.json()
                setCollection(resData.data)
                console.log("setItemsCollection",resData.data)

            } catch (error) {
                console.log(error.message)
            }
        }
        getItems()
    }, [vehicleIds])


    console.log('render', data, 'specifications', specifications)
    return (
        <>
            <Specifications />
        </>
    )
}
