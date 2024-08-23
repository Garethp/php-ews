<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
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
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\TargetFolderIdType
     * @return BaseMoveCopyFolderType
     */
    public function setToFolderId(\garethp\ews\API\Type\TargetFolderIdType $value)
    {
        $this->toFolderId = $this->castValueIfNeeded("toFolderId", $value);
        return $this;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     * @return BaseMoveCopyFolderType
     */
    public function setFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $value)
    {
        $this->folderIds = $this->castValueIfNeeded("folderIds", $value);
        return $this;
    }
}
