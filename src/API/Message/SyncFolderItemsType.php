<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderItemsType
 *
 *
 * XSD Type: SyncFolderItemsType
 *
 * @method SyncFolderItemsType setItemShape(\garethp\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method SyncFolderItemsType setSyncFolderId(\garethp\ews\API\Type\TargetFolderIdType $syncFolderId)
 * @method SyncFolderItemsType setSyncState(string $syncState)
 * @method SyncFolderItemsType addIgnore(\garethp\ews\API\Type\ItemIdType $ignore)
 * @method SyncFolderItemsType setIgnore(array $ignore)
 * @method SyncFolderItemsType setMaxChangesReturned(integer $maxChangesReturned)
 * @method SyncFolderItemsType setSyncScope(string $syncScope)
 */
class SyncFolderItemsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType[]
     */
    protected $ignore = null;

    /**
     * @var integer
     */
    protected $maxChangesReturned = null;

    /**
     * @var string
     */
    protected $syncScope = null;

    /**
     * @return \garethp\ews\API\Type\ItemResponseShapeType
     */
    public function getItemShape()
    {
        return $this->itemShape;
    }

    /**
     * @return \garethp\ews\API\Type\TargetFolderIdType
     */
    public function getSyncFolderId()
    {
        return $this->syncFolderId;
    }

    /**
     * @return string
     */
    public function getSyncState()
    {
        return $this->syncState;
    }

    /**
     * @return \garethp\ews\API\Type\ItemIdType[]
     */
    public function getIgnore()
    {
        return $this->ignore;
    }

    /**
     * @return integer
     */
    public function getMaxChangesReturned()
    {
        return $this->maxChangesReturned;
    }

    /**
     * @return string
     */
    public function getSyncScope()
    {
        return $this->syncScope;
    }
}
