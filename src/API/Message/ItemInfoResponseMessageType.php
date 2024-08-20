<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ItemInfoResponseMessageType
 *
 *
 * XSD Type: ItemInfoResponseMessageType
 *
 * @method ItemInfoResponseMessageType setItems(\garethp\ews\API\Type\ArrayOfRealItemsType $items)
 */
class ItemInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;

    /**
     * @return \garethp\ews\API\Type\ArrayOfRealItemsType
     */
    public function getItems()
    {
        return $this->items;
    }
}
