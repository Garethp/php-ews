<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SingleRecipientType
 *
 *
 * XSD Type: SingleRecipientType
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
     * @autogenerated This method is safe to replace
     * @return EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return SingleRecipientType
     */
    public function setMailbox(EmailAddressType $value)
    {
        $this->mailbox = $this->castValueIfNeeded("mailbox", $value);
        return $this;
    }
}
