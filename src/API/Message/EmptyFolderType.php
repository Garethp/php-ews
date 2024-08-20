<?php

namespace garethp\ews\API\Message;

/**
 * Class representing EmptyFolderType
 *
 *
 * XSD Type: EmptyFolderType
 *
 * @method string getDeleteType()
 * @method EmptyFolderType setDeleteType(string $deleteType)
 * @method boolean getDeleteSubFolders()
 * @method EmptyFolderType setDeleteSubFolders(boolean $deleteSubFolders)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
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
     * @returns bool
     */
    public function isDeleteSubFolders()
    {
        return ((bool) $this->deleteSubFolders);
    }
}
