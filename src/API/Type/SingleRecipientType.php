<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SingleRecipientType
 *
 *
 * XSD Type: SingleRecipientType
 *
 * @method SingleRecipientType setMailbox(EmailAddressType $mailbox)
 */
class SingleRecipientType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * SingleRecipientType constructor.
     * @param EmailAddressType|null $mailbox
     */
    public function __construct($mailbox = null)
    {
        $this->mailbox = $mailbox;
    }

    /**
     * @return EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }
}
