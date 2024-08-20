<?php

namespace garethp\ews\API\Message;

/**
 * Class representing MailTipsResponseMessageType
 *
 *
 * XSD Type: MailTipsResponseMessageType
 *
 * @method MailTipsResponseMessageType setMailTips(\garethp\ews\API\Type\MailTipsType $mailTips)
 */
class MailTipsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\MailTipsType
     */
    protected $mailTips = null;

    /**
     * @return \garethp\ews\API\Type\MailTipsType
     */
    public function getMailTips()
    {
        return $this->mailTips;
    }
}
