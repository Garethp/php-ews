<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UploadItemsResponseMessageType
 *
 *
 * XSD Type: UploadItemsResponseMessageType
 *
 * @method UploadItemsResponseMessageType setItemId(\garethp\ews\API\Type\ItemIdType $itemId)
 */
class UploadItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @return \garethp\ews\API\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }
}
