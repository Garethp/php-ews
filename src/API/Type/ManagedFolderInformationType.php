<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ManagedFolderInformationType
 *
 * Compound property for Managed Folder related information for Managed Folders.
 * XSD Type: ManagedFolderInformationType
 *
 * @method ManagedFolderInformationType setCanDelete(boolean $canDelete)
 * @method ManagedFolderInformationType setCanRenameOrMove(boolean $canRenameOrMove)
 * @method ManagedFolderInformationType setMustDisplayComment(boolean $mustDisplayComment)
 * @method ManagedFolderInformationType setHasQuota(boolean $hasQuota)
 * @method ManagedFolderInformationType setIsManagedFoldersRoot(boolean $isManagedFoldersRoot)
 * @method ManagedFolderInformationType setManagedFolderId(string $managedFolderId)
 * @method ManagedFolderInformationType setComment(string $comment)
 * @method ManagedFolderInformationType setStorageQuota(integer $storageQuota)
 * @method ManagedFolderInformationType setFolderSize(integer $folderSize)
 * @method ManagedFolderInformationType setHomePage(string $homePage)
 */
class ManagedFolderInformationType extends Type
{

    /**
     * @var boolean
     */
    protected $canDelete = null;

    /**
     * @var boolean
     */
    protected $canRenameOrMove = null;

    /**
     * @var boolean
     */
    protected $mustDisplayComment = null;

    /**
     * @var boolean
     */
    protected $hasQuota = null;

    /**
     * @var boolean
     */
    protected $isManagedFoldersRoot = null;

    /**
     * @var string
     */
    protected $managedFolderId = null;

    /**
     * @var string
     */
    protected $comment = null;

    /**
     * @var integer
     */
    protected $storageQuota = null;

    /**
     * @var integer
     */
    protected $folderSize = null;

    /**
     * @var string
     */
    protected $homePage = null;

    /**
     * @returns bool
     */
    public function isCanDelete()
    {
        return ((bool) $this->canDelete);
    }

    /**
     * @return boolean
     */
    public function getCanDelete()
    {
        return $this->canDelete;
    }

    /**
     * @returns bool
     */
    public function isCanRenameOrMove()
    {
        return ((bool) $this->canRenameOrMove);
    }

    /**
     * @return boolean
     */
    public function getCanRenameOrMove()
    {
        return $this->canRenameOrMove;
    }

    /**
     * @returns bool
     */
    public function isMustDisplayComment()
    {
        return ((bool) $this->mustDisplayComment);
    }

    /**
     * @return boolean
     */
    public function getMustDisplayComment()
    {
        return $this->mustDisplayComment;
    }

    /**
     * @returns bool
     */
    public function isHasQuota()
    {
        return ((bool) $this->hasQuota);
    }

    /**
     * @return boolean
     */
    public function getHasQuota()
    {
        return $this->hasQuota;
    }

    /**
     * @returns bool
     */
    public function isManagedFoldersRoot()
    {
        return ((bool) $this->isManagedFoldersRoot);
    }

    /**
     * @return boolean
     */
    public function getIsManagedFoldersRoot()
    {
        return $this->isManagedFoldersRoot;
    }

    /**
     * @return string
     */
    public function getManagedFolderId()
    {
        return $this->managedFolderId;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return integer
     */
    public function getStorageQuota()
    {
        return $this->storageQuota;
    }

    /**
     * @return integer
     */
    public function getFolderSize()
    {
        return $this->folderSize;
    }

    /**
     * @return string
     */
    public function getHomePage()
    {
        return $this->homePage;
    }
}
