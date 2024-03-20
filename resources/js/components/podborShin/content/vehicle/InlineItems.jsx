import HorisontalItem from "../HorisontalItem.jsx";

export default function InlineItems({itemsGroup}) {
    console.log(itemsGroup)
    return (<>
        <h2 className="catalog-product-title">{itemsGroup.specification}</h2>
        {itemsGroup.tires.map((item) => <HorisontalItem key={item.id} item={item}/>)}
    </>)
}
