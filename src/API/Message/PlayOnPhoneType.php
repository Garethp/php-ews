<?php

namespace garethp\ews\API\Message;

/**
 * Class representing PlayOnPhoneType
 *
 *
 * XSD Type: PlayOnPhoneType
 *
 * @method PlayOnPhoneType setItemId(\garethp\ews\API\Type\ItemIdType $itemId)
 * @method PlayOnPhoneType setDialString(string $dialString)
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
}
