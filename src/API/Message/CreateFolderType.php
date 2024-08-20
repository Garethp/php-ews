<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
 *
 * @method CreateFolderType setParentFolderId(\garethp\ews\API\Type\TargetFolderIdType $parentFolderId)
 * @method CreateFolderType setFolders(\garethp\ews\API\Type\NonEmptyArrayOfFoldersType $folders)
 */
class CreateFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfFoldersType
     */
    protected $folders = null;

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfFoldersType
     */
    public function getFolders()
    {
        return $this->folders;
    }
}
