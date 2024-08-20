<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UploadItemsType
 *
 *
 * XSD Type: UploadItemsType
 *
 * @method UploadItemsType addItems(\garethp\ews\API\Type\UploadItemType $items)
 * @method UploadItemsType setItems(array $items)
 */
class UploadItemsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UploadItemType[]
     */
    protected $items = null;

    /**
     * @return \garethp\ews\API\Type\UploadItemType[]
     */
    public function getItems()
    {
        return $this->items;
    }
}
