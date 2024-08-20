<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderItemsResponseMessageType
 *
 *
 * XSD Type: SyncFolderItemsResponseMessageType
 *
 * @method string getSyncState()
 * @method SyncFolderItemsResponseMessageType setSyncState(string $syncState)
 * @method boolean getIncludesLastItemInRange()
 * @method SyncFolderItemsResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method \garethp\ews\API\Type\SyncFolderItemsChangesType getChanges()
 * @method SyncFolderItemsResponseMessageType setChanges(\garethp\ews\API\Type\SyncFolderItemsChangesType $changes)
 */
class SyncFolderItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var boolean
     */
    protected $includesLastItemInRange = null;

    /**
     * @var \garethp\ews\API\Type\SyncFolderItemsChangesType
     */
    protected $changes = null;

    /**
     * @returns bool
     */
    public function isIncludesLastItemInRange()
    {
        return $this->includesLastItemInRange && $this->includesLastItemInRange;
    }
}
