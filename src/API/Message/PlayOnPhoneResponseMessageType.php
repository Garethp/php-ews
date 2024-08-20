<?php

namespace garethp\ews\API\Message;

/**
 * Class representing PlayOnPhoneResponseMessageType
 *
 *
 * XSD Type: PlayOnPhoneResponseMessageType
 *
 * @method PlayOnPhoneResponseMessageType setPhoneCallId(\garethp\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;

    /**
     * @return \garethp\ews\API\Type\PhoneCallIdType
     */
    public function getPhoneCallId()
    {
        return $this->phoneCallId;
    }
}
