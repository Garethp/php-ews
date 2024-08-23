<?php

namespace garethp\ews\API\Type;

/**
 * Class representing EmailAddressType
 *
 * Identifier for a fully resolved email address
 * XSD Type: EmailAddressType
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
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressType
     */
    public function setName($value)
    {
        $this->name = $this->castValueIfNeeded("name", $value);
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressType
     */
    public function setEmailAddress($value)
    {
        $this->emailAddress = $this->castValueIfNeeded("emailAddress", $value);
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressType
     */
    public function setRoutingType($value)
    {
        $this->routingType = $this->castValueIfNeeded("routingType", $value);
        return $this;
    }

    /**
     * @return string
     */
    public function getMailboxType()
    {
        return $this->mailboxType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressType
     */
    public function setMailboxType($value)
    {
        $this->mailboxType = $this->castValueIfNeeded("mailboxType", $value);
        return $this;
    }

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return EmailAddressType
     */
    public function setItemId(ItemIdType $value)
    {
        $this->itemId = $this->castValueIfNeeded("itemId", $value);
        return $this;
    }
}
