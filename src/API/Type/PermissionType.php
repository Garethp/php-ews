<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PermissionType
 *
 * A permission on a folder
 * XSD Type: PermissionType
 *
 * @method PermissionType setReadItems(string $readItems)
 * @method PermissionType setPermissionLevel(string $permissionLevel)
 */
class PermissionType extends BasePermissionType
{

    /**
     * @var string
     */
    protected $readItems = null;

    /**
     * @var string
     */
    protected $permissionLevel = null;

    /**
     * @return string
     */
    public function getReadItems()
    {
        return $this->readItems;
    }

    /**
     * @return string
     */
    public function getPermissionLevel()
    {
        return $this->permissionLevel;
    }
}
