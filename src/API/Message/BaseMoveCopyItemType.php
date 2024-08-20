<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseMoveCopyItemType
 *
 *
 * XSD Type: BaseMoveCopyItemType
 *
 * @method BaseMoveCopyItemType setToFolderId(\garethp\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method BaseMoveCopyItemType setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method BaseMoveCopyItemType setReturnNewItemIds(boolean $returnNewItemIds)
 */
class BaseMoveCopyItemType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var boolean
     */
    protected $returnNewItemIds = null;

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getToFolderId()
    {
        return $this->toFolderId;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }

    /**
     * @returns bool
     */
    public function isReturnNewItemIds()
    {
        return ((bool) $this->returnNewItemIds);
    }

    /**
     * @return boolean
     */
    public function getReturnNewItemIds()
    {
        return $this->returnNewItemIds;
    }
}
