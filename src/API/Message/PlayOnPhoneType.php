<?php

namespace garethp\ews\API\Message;

/**
 * Class representing PlayOnPhoneType
 *
 *
 * XSD Type: PlayOnPhoneType
 */
class PlayOnPhoneType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $dialString = null;

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
    public function getDialString()
    {
        return $this->dialString;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ItemIdType
     * @return PlayOnPhoneType
     */
    public function setItemId(\garethp\ews\API\Type\ItemIdType $value)
    {
        $this->itemId = $this->castValueIfNeeded("itemId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PlayOnPhoneType
     */
    public function setDialString($value)
    {
        $this->dialString = $this->castValueIfNeeded("dialString", $value);
        return $this;
    }
}
