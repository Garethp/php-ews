<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: PermissionSetType
 *
 * @method PermissionSetType addPermissions(PermissionType $permissions)
 * @method PermissionSetType setPermissions(array $permissions)
 * @method PermissionSetType addUnknownEntries(string $unknownEntries)
 * @method PermissionSetType setUnknownEntries(array $unknownEntries)
 */
class PermissionSetType extends Type
{

    /**
     * @var \garethp\ews\API\Type\PermissionType[]
     */
    protected $permissions = null;

    /**
     * @var string[]
     */
    protected $unknownEntries = null;

    /**
     * @return PermissionType[]
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @return string[]
     */
    public function getUnknownEntries()
    {
        return $this->unknownEntries;
    }
}
