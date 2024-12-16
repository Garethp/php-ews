<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
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
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ItemIdType
     * @return ExportItemsResponseMessageType
     */
    public function setItemId(\garethp\ews\API\Type\ItemIdType $value)
    {
        $this->itemId = $this->castValueIfNeeded("itemId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ExportItemsResponseMessageType
     */
    public function setData($value)
    {
        $this->data = $this->castValueIfNeeded("data", $value);
        return $this;
    }
}
