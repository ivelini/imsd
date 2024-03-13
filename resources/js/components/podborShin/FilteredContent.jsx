import HorisontalItem from "./content/HorisontalItem.jsx";

export default function FilteredContent({ items }) {
    return (
        <>
            <div className="catalog-with-products">
                {
                    items.length > 0 ?
                        items.map((item, index) => <HorisontalItem item={item} key={index} />) :
                        'К сожалению, ничего не найдено. Попробуйте ввести другие параметры'
                }
            </div>
        </>
    )
}
