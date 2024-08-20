<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserMailboxType
 *
 * User Mailbox.
 * XSD Type: UserMailboxType
 *
 * @method string getId()
 * @method UserMailboxType setId(string $id)
 * @method boolean getIsArchive()
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
     * @returns bool
     */
    public function isArchive()
    {
        return ((bool) $this->isArchive);
    }
}
