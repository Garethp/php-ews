<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetPasswordExpirationDateType
 *
 *
 * XSD Type: GetPasswordExpirationDateType
 */
class GetPasswordExpirationDateType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $mailboxSmtpAddress = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMailboxSmtpAddress()
    {
        return $this->mailboxSmtpAddress;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetPasswordExpirationDateType
     */
    public function setMailboxSmtpAddress($value)
    {
        $this->mailboxSmtpAddress = $value;
        return $this;
    }
}
