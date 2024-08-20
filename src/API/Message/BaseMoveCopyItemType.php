<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseMoveCopyItemType
 *
 *
 * XSD Type: BaseMoveCopyItemType
 *
 * @method \garethp\ews\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyItemType setToFolderId(\garethp\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method BaseMoveCopyItemType setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method boolean getReturnNewItemIds()
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
     * @returns bool
     */
    public function isReturnNewItemIds()
    {
        return ((bool) $this->returnNewItemIds);
    }
}
