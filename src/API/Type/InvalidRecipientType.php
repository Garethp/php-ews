<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing InvalidRecipientType
 *
 *
 * XSD Type: InvalidRecipientType
 *
 * @method InvalidRecipientType setSmtpAddress(string $smtpAddress)
 * @method InvalidRecipientType setResponseCode(string $responseCode)
 * @method InvalidRecipientType setMessageText(string $messageText)
 */
class InvalidRecipientType extends Type
{

    /**
     * @var string
     */
    protected $smtpAddress = null;

    /**
     * @var string
     */
    protected $responseCode = null;

    /**
     * @var string
     */
    protected $messageText = null;

    /**
     * @return string
     */
    public function getSmtpAddress()
    {
        return $this->smtpAddress;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }
}
