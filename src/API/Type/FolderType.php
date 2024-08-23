<?php

namespace garethp\ews\API\Type;

/**
 * Class representing FolderType
 *
 *
 * XSD Type: FolderType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value PermissionSetType
     * @return FolderType
     */
    public function setPermissionSet(PermissionSetType $value)
    {
        $this->permissionSet = $this->castValueIfNeeded("permissionSet", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return FolderType
     */
    public function setUnreadCount($value)
    {
        $this->unreadCount = $this->castValueIfNeeded("unreadCount", $value);
        return $this;
    }
}
