<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMailTipsResponseMessageType
 *
 *
 * XSD Type: GetMailTipsResponseMessageType
 *
 * @method GetMailTipsResponseMessageType addResponseMessages(MailTipsResponseMessageType $responseMessages)
 * @method GetMailTipsResponseMessageType setResponseMessages(array $responseMessages)
 */
class GetMailTipsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Message\MailTipsResponseMessageType[]
     */
    protected $responseMessages = null;

    /**
     * @return MailTipsResponseMessageType[]
     */
    public function getResponseMessages()
    {
        return $this->responseMessages;
    }
}
