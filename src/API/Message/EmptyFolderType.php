<?php

namespace garethp\ews\API\Message;

/**
 * Class representing EmptyFolderType
 *
 *
 * XSD Type: EmptyFolderType
 *
 * @method EmptyFolderType setDeleteType(string $deleteType)
 * @method EmptyFolderType setDeleteSubFolders(boolean $deleteSubFolders)
 * @method EmptyFolderType setFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class EmptyFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var boolean
     */
    protected $deleteSubFolders = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;

    /**
     * @return string
     */
    public function getDeleteType()
    {
        return $this->deleteType;
    }

    /**
     * @returns bool
     */
    public function isDeleteSubFolders()
    {
        return ((bool) $this->deleteSubFolders);
    }

    /**
     * @return boolean
     */
    public function getDeleteSubFolders()
    {
        return $this->deleteSubFolders;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }
}
