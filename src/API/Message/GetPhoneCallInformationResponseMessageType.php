<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetPhoneCallInformationResponseMessageType
 *
 *
 * XSD Type: GetPhoneCallInformationResponseMessageType
 *
 * @method GetPhoneCallInformationResponseMessageType setPhoneCallInformation(\garethp\ews\API\Type\PhoneCallInformationType $phoneCallInformation)
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\PhoneCallInformationType
     */
    protected $phoneCallInformation = null;

    /**
     * @return \garethp\ews\API\Type\PhoneCallInformationType
     */
    public function getPhoneCallInformation()
    {
        return $this->phoneCallInformation;
    }
}
