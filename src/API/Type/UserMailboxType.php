<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserMailboxType
 *
 * User Mailbox.
 * XSD Type: UserMailboxType
 *
 * @method UserMailboxType setId(string $id)
 * @method UserMailboxType setIsArchive(boolean $isArchive)
 */
class UserMailboxType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

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
