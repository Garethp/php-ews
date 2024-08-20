<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
 *
 * @method BaseMoveCopyFolderType setToFolderId(\garethp\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method BaseMoveCopyFolderType setFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class BaseMoveCopyFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getToFolderId()
    {
        return $this->toFolderId;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }
}
