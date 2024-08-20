<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExpandDLType
 *
 *
 * XSD Type: ExpandDLType
 *
 * @method ExpandDLType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class ExpandDLType extends BaseRequestType
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
