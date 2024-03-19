export default function Specifications({specifications, selectedVehicleIds, upSelectedVehicleId}) {

    function returnHtmlTypeSpecification(type, title) {
        return (<>
            {typeof specifications[type] != 'undefined' && (
                <div>
                    <div>{title}</div>
                    {specifications[type].map((el) => (
                        <div key={el.id}>
                            <input type="checkbox"
                                   value={el.id}
                                   checked={selectedVehicleIds.some((selectedVehicleId) => selectedVehicleId == el.id)}
                                   onChange={() => upSelectedVehicleId(el.id)}
                            />
                            <span>{el.name}</span>
                        </div>
                    ))}
                </div>
            )}
        </>)
    }

    return (<>
        {returnHtmlTypeSpecification('default', 'Рекомендованная')}
        {returnHtmlTypeSpecification('alternative', 'Альтернатива')}
        {returnHtmlTypeSpecification('tuning', 'Тюнинг')}
    </>)
}
