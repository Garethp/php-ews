<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ConvertIdResponseMessageType
 *
 * Response Message for a single id conversion in the ConvertId web method. Note
 *  that the AlternateId element will be missing in the case of an error.
 * XSD Type: ConvertIdResponseMessageType
 *
 * @method ConvertIdResponseMessageType setAlternateId(\garethp\ews\API\Type\AlternateIdBaseType $alternateId)
 */
class ConvertIdResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\AlternateIdBaseType
     */
    protected $alternateId = null;

    /**
     * @return \garethp\ews\API\Type\AlternateIdBaseType
     */
    public function getAlternateId()
    {
        return $this->alternateId;
    }
}
