import HorisontalItem from "../HorisontalItem.jsx";
import styles from '../../PodborShinMain.module.css'

export default function GroupItems({groupingItemsGroup}) {
    console.log(groupingItemsGroup)
    return (<>
        <h2 className="catalog-product-title">{groupingItemsGroup.specification}</h2>
        {groupingItemsGroup.tires.map((group) => (<>
            <div className={styles.groupedItems}>
                {group.map((item) => <HorisontalItem key={item.id} item={item}/>)}
            </div>
        </>))}
    </>)
}
