<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AlternateIdType
 *
 * Represents an alternate mailbox folder or item Id.
 * XSD Type: AlternateIdType
 *
 * @method AlternateIdType setId(string $id)
 * @method AlternateIdType setMailbox(string $mailbox)
 * @method AlternateIdType setIsArchive(boolean $isArchive)
 */
class AlternateIdType extends AlternateIdBaseType
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $mailbox = null;

    /**
     * @var boolean
     */
    protected $isArchive = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @returns bool
     */
    public function isArchive()
    {
        return ((bool) $this->isArchive);
    }

    /**
     * @return boolean
     */
    public function getIsArchive()
    {
        return $this->isArchive;
    }
}
