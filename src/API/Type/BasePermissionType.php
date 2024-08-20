<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BasePermissionType
 *
 * A permission on a folder
 * XSD Type: BasePermissionType
 *
 * @method BasePermissionType setUserId(UserIdType $userId)
 * @method BasePermissionType setCanCreateItems(boolean $canCreateItems)
 * @method BasePermissionType setCanCreateSubFolders(boolean $canCreateSubFolders)
 * @method BasePermissionType setIsFolderOwner(boolean $isFolderOwner)
 * @method BasePermissionType setIsFolderVisible(boolean $isFolderVisible)
 * @method BasePermissionType setIsFolderContact(boolean $isFolderContact)
 * @method BasePermissionType setEditItems(string $editItems)
 * @method BasePermissionType setDeleteItems(string $deleteItems)
 */
class BasePermissionType extends Type
{

    /**
     * @var \garethp\ews\API\Type\UserIdType
     */
    protected $userId = null;

    /**
     * @var boolean
     */
    protected $canCreateItems = null;

    /**
     * @var boolean
     */
    protected $canCreateSubFolders = null;

    /**
     * @var boolean
     */
    protected $isFolderOwner = null;

    /**
     * @var boolean
     */
    protected $isFolderVisible = null;

    /**
     * @var boolean
     */
    protected $isFolderContact = null;

    /**
     * @var string
     */
    protected $editItems = null;

    /**
     * @var string
     */
    protected $deleteItems = null;

    /**
     * @return UserIdType
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @returns bool
     */
    public function isCanCreateItems()
    {
        return ((bool) $this->canCreateItems);
    }

    /**
     * @return boolean
     */
    public function getCanCreateItems()
    {
        return $this->canCreateItems;
    }

    /**
     * @returns bool
     */
    public function isCanCreateSubFolders()
    {
        return ((bool) $this->canCreateSubFolders);
    }

    /**
     * @return boolean
     */
    public function getCanCreateSubFolders()
    {
        return $this->canCreateSubFolders;
    }

    /**
     * @returns bool
     */
    public function isFolderOwner()
    {
        return ((bool) $this->isFolderOwner);
    }

    /**
     * @return boolean
     */
    public function getIsFolderOwner()
    {
        return $this->isFolderOwner;
    }

    /**
     * @returns bool
     */
    public function isFolderVisible()
    {
        return ((bool) $this->isFolderVisible);
    }

    /**
     * @return boolean
     */
    public function getIsFolderVisible()
    {
        return $this->isFolderVisible;
    }

    /**
     * @returns bool
     */
    public function isFolderContact()
    {
        return ((bool) $this->isFolderContact);
    }

    /**
     * @return boolean
     */
    public function getIsFolderContact()
    {
        return $this->isFolderContact;
    }

    /**
     * @return string
     */
    public function getEditItems()
    {
        return $this->editItems;
    }

    /**
     * @return string
     */
    public function getDeleteItems()
    {
        return $this->deleteItems;
    }
}
