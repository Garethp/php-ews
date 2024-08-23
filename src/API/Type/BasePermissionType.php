<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BasePermissionType
 *
 * A permission on a folder
 * XSD Type: BasePermissionType
 *
 * @method UserIdType getUserId()
 * @method BasePermissionType setUserId(UserIdType $userId)
 * @method boolean getCanCreateItems()
 * @method BasePermissionType setCanCreateItems(boolean $canCreateItems)
 * @method boolean getCanCreateSubFolders()
 * @method BasePermissionType setCanCreateSubFolders(boolean $canCreateSubFolders)
 * @method boolean getIsFolderOwner()
 * @method BasePermissionType setIsFolderOwner(boolean $isFolderOwner)
 * @method boolean getIsFolderVisible()
 * @method BasePermissionType setIsFolderVisible(boolean $isFolderVisible)
 * @method boolean getIsFolderContact()
 * @method BasePermissionType setIsFolderContact(boolean $isFolderContact)
 * @method string getEditItems()
 * @method BasePermissionType setEditItems(string $editItems)
 * @method string getDeleteItems()
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
     * @returns bool
     */
    public function isCanCreateItems()
    {
        return ((bool) $this->canCreateItems);
    }

    /**
     * @returns bool
     */
    public function isCanCreateSubFolders()
    {
        return ((bool) $this->canCreateSubFolders);
    }

    /**
     * @returns bool
     */
    public function isFolderOwner()
    {
        return ((bool) $this->isFolderOwner);
    }

    /**
     * @returns bool
     */
    public function isFolderVisible()
    {
        return ((bool) $this->isFolderVisible);
    }

    /**
     * @returns bool
     */
    public function isFolderContact()
    {
        return ((bool) $this->isFolderContact);
    }
}
