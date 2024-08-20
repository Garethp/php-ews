<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DisconnectPhoneCallType
 *
 *
 * XSD Type: DisconnectPhoneCallType
 *
 * @method DisconnectPhoneCallType setPhoneCallId(\garethp\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class DisconnectPhoneCallType extends BaseRequestType
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
