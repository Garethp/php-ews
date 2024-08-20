<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MovedCopiedEventType
 *
 *
 * XSD Type: MovedCopiedEventType
 *
 * @method MovedCopiedEventType setOldFolderId(FolderIdType $oldFolderId)
 * @method MovedCopiedEventType setOldItemId(ItemIdType $oldItemId)
 * @method MovedCopiedEventType setOldParentFolderId(FolderIdType $oldParentFolderId)
 */
class MovedCopiedEventType extends BaseObjectChangedEventType
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $oldFolderId = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $oldItemId = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $oldParentFolderId = null;

    /**
     * @return FolderIdType
     */
    public function getOldFolderId()
    {
        return $this->oldFolderId;
    }

    /**
     * @return ItemIdType
     */
    public function getOldItemId()
    {
        return $this->oldItemId;
    }

    /**
     * @return FolderIdType
     */
    public function getOldParentFolderId()
    {
        return $this->oldParentFolderId;
    }
}
