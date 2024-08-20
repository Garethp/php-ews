<?php

namespace garethp\ews\API\Type;

/**
 * Class representing FolderType
 *
 *
 * XSD Type: FolderType
 *
 * @method FolderType setPermissionSet(PermissionSetType $permissionSet)
 * @method FolderType setUnreadCount(integer $unreadCount)
 */
class FolderType extends BaseFolderType
{

    /**
     * @var \garethp\ews\API\Type\PermissionSetType
     */
    protected $permissionSet = null;

    /**
     * @var integer
     */
    protected $unreadCount = null;

    /**
     * @return PermissionSetType
     */
    public function getPermissionSet()
    {
        return $this->permissionSet;
    }

    /**
     * @return integer
     */
    public function getUnreadCount()
    {
        return $this->unreadCount;
    }
}
