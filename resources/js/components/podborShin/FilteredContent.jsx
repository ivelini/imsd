import HorisontalItem from "./content/HorisontalItem.jsx";
import VehicleContent from "./content/vehicle/VehicleContent.jsx";

export default function FilteredContent({ params }) {
    return (
        <>
            {
                params.typeFilter == 'param' && (
                    <div className="catalog-with-products">
                        {
                            params.items.length > 0 ?
                                params.items.map((item, index) => <HorisontalItem item={item} key={index} />) :
                                'К сожалению, ничего не найдено. Попробуйте ввести другие параметры'
                        }
                    </div>
                )
            }
            {
                params.typeFilter == 'car' && (
                    <>
                        <div className="catalog-with-products">
                            <VehicleContent key={params.params.default[0].id} data={params}/>
                        </div>
                    </>
                )
            }
        </>
    )
}
