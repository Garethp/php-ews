<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing EmailAddressDictionaryEntryType
 *
 *
 * XSD Type: EmailAddressDictionaryEntryType
 *
 * @method EmailAddressDictionaryEntryType setKey(string $key)
 * @method EmailAddressDictionaryEntryType setName(string $name)
 * @method EmailAddressDictionaryEntryType setRoutingType(string $routingType)
 * @method EmailAddressDictionaryEntryType setMailboxType(string $mailboxType)
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
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

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
}
