<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ResolutionType
 *
 *
 * XSD Type: ResolutionType
 *
 * @method ResolutionType setMailbox(EmailAddressType $mailbox)
 * @method ResolutionType setContact(ContactItemType $contact)
 */
class ResolutionType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \garethp\ews\API\Type\ContactItemType
     */
    protected $contact = null;

    /**
     * @return EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @return ContactItemType
     */
    public function getContact()
    {
        return $this->contact;
    }
}
