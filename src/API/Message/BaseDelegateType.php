<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseDelegateType
 *
 *
 * XSD Type: BaseDelegateType
 *
 * @method BaseDelegateType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class BaseDelegateType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }
}
