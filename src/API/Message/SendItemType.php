<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method SendItemType setSaveItemToFolder(boolean $saveItemToFolder)
 * @method SendItemType setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method SendItemType setSavedItemFolderId(\garethp\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 */
class SendItemType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $saveItemToFolder = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @returns bool
     */
    public function isSaveItemToFolder()
    {
        return ((bool) $this->saveItemToFolder);
    }

    /**
     * @return boolean
     */
    public function getSaveItemToFolder()
    {
        return $this->saveItemToFolder;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getSavedItemFolderId()
    {
        return $this->savedItemFolderId;
    }
}
