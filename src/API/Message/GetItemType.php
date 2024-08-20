<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetItemType
 *
 *
 * XSD Type: GetItemType
 *
 * @method GetItemType setItemShape(\garethp\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method GetItemType setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class GetItemType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @return \garethp\ews\API\Type\ItemResponseShapeType
     */
    public function getItemShape()
    {
        return $this->itemShape;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }
}
