<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
 *
 * @method ExportItemsResponseMessageType setItemId(\garethp\ews\API\Type\ItemIdType $itemId)
 * @method ExportItemsResponseMessageType setData(string $data)
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;

    /**
     * @return \garethp\ews\API\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
}
