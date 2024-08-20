<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetPhoneCallInformationType
 *
 *
 * XSD Type: GetPhoneCallInformationType
 *
 * @method GetPhoneCallInformationType setPhoneCallId(\garethp\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class GetPhoneCallInformationType extends BaseRequestType
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
