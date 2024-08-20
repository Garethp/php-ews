<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing DirectoryEntryType
 *
 *
 * XSD Type: DirectoryEntryType
 *
 * @method DirectoryEntryType setId(EmailAddressType $id)
 */
class DirectoryEntryType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $id = null;

    /**
     * @return EmailAddressType
     */
    public function getId()
    {
        return $this->id;
    }
}
