<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderItemsResponseMessageType
 *
 *
 * XSD Type: SyncFolderItemsResponseMessageType
 *
 * @method SyncFolderItemsResponseMessageType setSyncState(string $syncState)
 * @method SyncFolderItemsResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
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
     * @return string
     */
    public function getSyncState()
    {
        return $this->syncState;
    }

    /**
     * @returns bool
     */
    public function isIncludesLastItemInRange()
    {
        return ((bool) $this->includesLastItemInRange);
    }

    /**
     * @return boolean
     */
    public function getIncludesLastItemInRange()
    {
        return $this->includesLastItemInRange;
    }

    /**
     * @return \garethp\ews\API\Type\SyncFolderItemsChangesType
     */
    public function getChanges()
    {
        return $this->changes;
    }
}
