<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method boolean getSaveItemToFolder()
 * @method SendItemType setSaveItemToFolder(boolean $saveItemToFolder)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method SendItemType setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method \garethp\ews\API\Type\TargetFolderIdType getSavedItemFolderId()
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
        return $this->saveItemToFolder && $this->saveItemToFolder;
    }
}
