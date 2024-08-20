<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyResponseMessageType
 *
 *
 * XSD Type: SyncFolderHierarchyResponseMessageType
 *
 * @method string getSyncState()
 * @method SyncFolderHierarchyResponseMessageType setSyncState(string $syncState)
 * @method boolean getIncludesLastFolderInRange()
 * @method SyncFolderHierarchyResponseMessageType setIncludesLastFolderInRange(boolean $includesLastFolderInRange)
 * @method \garethp\ews\API\Type\SyncFolderHierarchyChangesType getChanges()
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
     * @returns bool
     */
    public function isIncludesLastFolderInRange()
    {
        return $this->includesLastFolderInRange && $this->includesLastFolderInRange;
    }
}
