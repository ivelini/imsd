import GroupItems from "./GroupItems.jsx";
import InlineItems from "./InlineItems.jsx";

export default function GroupSpecification({type, title, collection}) {
    return (<>
        {typeof collection[type] != 'undefined' &&
            (<>
                <div>{title}</div>
                {collection[type]
                    .sort(function (itemsGroupA, itemsGroupB) {
                        return itemsGroupA.specification_id - itemsGroupB.specification_id
                    })
                    .map(function (itemsGroup) {
                        return (<>
                            {itemsGroup.is_grouping == true ?
                                (<GroupItems key={itemsGroup.specification_id} groupingItemsGroup={itemsGroup} />) :
                                (<InlineItems key={itemsGroup.specification_id} itemsGroup={itemsGroup} />)}
                        </>)
                    })}
            </>)}
    </>)
}
