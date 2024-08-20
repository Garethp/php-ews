<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetInboxRulesRequestType
 *
 *
 * XSD Type: GetInboxRulesRequestType
 *
 * @method GetInboxRulesRequestType setMailboxSmtpAddress(string $mailboxSmtpAddress)
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
}
