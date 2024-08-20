<?php

namespace garethp\ews\API\Type;

/**
 * Class representing EmailAddressType
 *
 * Identifier for a fully resolved email address
 * XSD Type: EmailAddressType
 *
 * @method EmailAddressType setName(string $name)
 * @method EmailAddressType setEmailAddress(string $emailAddress)
 * @method EmailAddressType setRoutingType(string $routingType)
 * @method EmailAddressType setMailboxType(string $mailboxType)
 * @method EmailAddressType setItemId(ItemIdType $itemId)
 */
class EmailAddressType extends BaseEmailAddressType
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $emailAddress = null;

    /**
     * @var string
     */
    protected $routingType = null;

    /**
     * @var string
     */
    protected $mailboxType = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * @return string
     */
    public function getMailboxType()
    {
        return $this->mailboxType;
    }

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }
}
