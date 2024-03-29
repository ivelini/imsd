import {useEffect, useState} from "react";
import Specifications from "./Specifications.jsx";
import GroupItems from "./GroupItems.jsx";
import InlineItems from "./InlineItems.jsx";
import GroupSpecification from "./GroupSpecefication.jsx";

export default function VehicleContent({data}) {
    // Массив ID спецификаций для подбора шин
    const [selectedVehicleIds, setSelectedVehicleIds] = useState([data.params.default[0].id])
    // Коллекция шин для массива спецификаций
    const [collection, setCollection] = useState({})

    //Доступные спецификации для выбранных параметров автомобиля
    let specifications = {
        default: data.params.default?.map((el) => {return {id: el.id, name: el.name}}),
        alternative: data.params.alternative?.map((el) => {return {id: el.id, name: el.name}}),
        tuning: data.params.tuning?.map((el) => {return {id: el.id, name: el.name}})
    }

    useEffect(() => {
        const getItems = async () => {
            let url = import.meta.env.VITE_APP_URL + '/api/vehicle/tire?filters=vehicle|' + selectedVehicleIds.join(',')

            try {
                let res = await fetch(url, {headers: {'Accept': 'application/json'}})
                let resData = await res.json()
                setCollection(resData.data)
            } catch (error) {
                console.log(error.message)
            }
        }
        if(selectedVehicleIds.length > 0) {
            getItems()
        }
    }, [selectedVehicleIds])

    //Обновляем выбранные ID спецификаций
    function updateSelectedVehicleIds(changeVehicleId) {
        let nextSelectedVehicleIds = [...selectedVehicleIds]

        let changeVehicleIdIsSet = false
        nextSelectedVehicleIds = nextSelectedVehicleIds.filter((nextSelectedVehicleId) => {
            if(nextSelectedVehicleId == changeVehicleId) {
                changeVehicleIdIsSet = true
                return false
            }
            return true
        })

        if(changeVehicleIdIsSet == false) {
            nextSelectedVehicleIds.push(changeVehicleId)
        }

        setSelectedVehicleIds(nextSelectedVehicleIds)
    }


    console.log('render', data, 'specifications', specifications, 'selectedVehicleIds', selectedVehicleIds, 'collection', collection)

    function returnHtmlCollectionTypeSpecification(type, title) {

    }

    return (<>
            <Specifications specifications={specifications} selectedVehicleIds={selectedVehicleIds} upSelectedVehicleId={updateSelectedVehicleIds}/>

            {selectedVehicleIds.length > 0 && (
                <>
                    <GroupSpecification key={collection.default?.map((itemGroup) => itemGroup.specification_id).join('.')} type="default" title="Рекомендация производителя" collection={collection} />
                    <GroupSpecification key={collection.alternative?.map((itemGroup) => itemGroup.specification_id).join('.')} type="alternative" title="Лучшая альтернатива" collection={collection} />
                    <GroupSpecification key={collection.tuning?.map((itemGroup) => itemGroup.specification_id).join('.')} type="tuning" title="Тюнинг" collection={collection} />
                </>

            )}
    </>)
}
