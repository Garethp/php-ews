<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing EmailAddressDictionaryEntryType
 *
 *
 * XSD Type: EmailAddressDictionaryEntryType
 */
class EmailAddressDictionaryEntryType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $routingType = null;

    /**
     * @var string
     */
    protected $mailboxType = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressDictionaryEntryType
     */
    public function setKey($value)
    {
        $this->key = $this->castValueIfNeeded("key", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressDictionaryEntryType
     */
    public function setName($value)
    {
        $this->name = $this->castValueIfNeeded("name", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressDictionaryEntryType
     */
    public function setRoutingType($value)
    {
        $this->routingType = $this->castValueIfNeeded("routingType", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMailboxType()
    {
        return $this->mailboxType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return EmailAddressDictionaryEntryType
     */
    public function setMailboxType($value)
    {
        $this->mailboxType = $this->castValueIfNeeded("mailboxType", $value);
        return $this;
    }
}
