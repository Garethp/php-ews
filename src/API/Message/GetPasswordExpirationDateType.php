<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetPasswordExpirationDateType
 *
 *
 * XSD Type: GetPasswordExpirationDateType
 *
 * @method GetPasswordExpirationDateType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 */
class GetPasswordExpirationDateType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $mailboxSmtpAddress = null;

    /**
     * @return string
     */
    public function getMailboxSmtpAddress()
    {
        return $this->mailboxSmtpAddress;
    }
}
