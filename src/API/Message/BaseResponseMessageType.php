<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing BaseResponseMessageType
 *
 *
 * XSD Type: BaseResponseMessageType
 *
 * @method BaseResponseMessageType setResponseMessages(ArrayOfResponseMessagesType $responseMessages)
 */
class BaseResponseMessageType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ArrayOfResponseMessagesType
     */
    protected $responseMessages = null;

    /**
     * @return ArrayOfResponseMessagesType
     */
    public function getResponseMessages()
    {
        return $this->responseMessages;
    }
}
