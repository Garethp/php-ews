<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseDelegateResponseMessageType
 *
 *
 * XSD Type: BaseDelegateResponseMessageType
 *
 * @method BaseDelegateResponseMessageType addResponseMessages(DelegateUserResponseMessageType $responseMessages)
 * @method BaseDelegateResponseMessageType setResponseMessages(array $responseMessages)
 */
class BaseDelegateResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Message\DelegateUserResponseMessageType[]
     */
    protected $responseMessages = null;

    /**
     * @return DelegateUserResponseMessageType[]
     */
    public function getResponseMessages()
    {
        return $this->responseMessages;
    }
}
