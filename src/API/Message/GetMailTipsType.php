<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method GetMailTipsType setSendingAs(\garethp\ews\API\Type\EmailAddressType $sendingAs)
 * @method GetMailTipsType addRecipients(\garethp\ews\API\Type\EmailAddressType $recipients)
 * @method GetMailTipsType setRecipients(array $recipients)
 * @method GetMailTipsType addMailTipsRequested(string $mailTipsRequested)
 * @method GetMailTipsType setMailTipsRequested(array $mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $sendingAs = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var string[]
     */
    protected $mailTipsRequested = null;

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getSendingAs()
    {
        return $this->sendingAs;
    }

    /**
     * @return \garethp\ews\API\Type\EmailAddressType[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @return string[]
     */
    public function getMailTipsRequested()
    {
        return $this->mailTipsRequested;
    }
}
