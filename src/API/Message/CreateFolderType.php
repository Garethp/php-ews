<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
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
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\TargetFolderIdType
     * @return CreateFolderType
     */
    public function setParentFolderId(\garethp\ews\API\Type\TargetFolderIdType $value)
    {
        $this->parentFolderId = $this->castValueIfNeeded("parentFolderId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\NonEmptyArrayOfFoldersType
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\NonEmptyArrayOfFoldersType
     * @return CreateFolderType
     */
    public function setFolders(\garethp\ews\API\Type\NonEmptyArrayOfFoldersType $value)
    {
        $this->folders = $this->castValueIfNeeded("folders", $value);
        return $this;
    }
}
