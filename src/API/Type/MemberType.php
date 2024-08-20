<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MemberType
 *
 *
 * XSD Type: MemberType
 *
 * @method MemberType setKey(string $key)
 * @method MemberType setMailbox(EmailAddressType $mailbox)
 * @method MemberType setStatus(string $status)
 */
class MemberType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var string
     */
    protected $status = null;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return EmailAddressType
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
