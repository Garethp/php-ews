<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetInboxRulesRequestType
 *
 *
 * XSD Type: GetInboxRulesRequestType
 */
class GetInboxRulesRequestType extends BaseRequestType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetInboxRulesRequestType
     */
    public function setMailboxSmtpAddress($value)
    {
        $this->mailboxSmtpAddress = $this->castValueIfNeeded("mailboxSmtpAddress", $value);
        return $this;
    }
}
