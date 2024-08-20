<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyResponseMessageType
 *
 *
 * XSD Type: SyncFolderHierarchyResponseMessageType
 *
 * @method SyncFolderHierarchyResponseMessageType setSyncState(string $syncState)
 * @method SyncFolderHierarchyResponseMessageType setIncludesLastFolderInRange(boolean $includesLastFolderInRange)
 * @method SyncFolderHierarchyResponseMessageType setChanges(\garethp\ews\API\Type\SyncFolderHierarchyChangesType $changes)
 */
class SyncFolderHierarchyResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var boolean
     */
    protected $includesLastFolderInRange = null;

    /**
     * @var \garethp\ews\API\Type\SyncFolderHierarchyChangesType
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
    public function isIncludesLastFolderInRange()
    {
        return ((bool) $this->includesLastFolderInRange);
    }

    /**
     * @return boolean
     */
    public function getIncludesLastFolderInRange()
    {
        return $this->includesLastFolderInRange;
    }

    /**
     * @return \garethp\ews\API\Type\SyncFolderHierarchyChangesType
     */
    public function getChanges()
    {
        return $this->changes;
    }
}
