<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyResponseMessageType
 *
 *
 * XSD Type: SyncFolderHierarchyResponseMessageType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SyncFolderHierarchyResponseMessageType
     */
    public function setSyncState($value)
    {
        $this->syncState = $this->castValueIfNeeded("syncState", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isIncludesLastFolderInRange()
    {
        return ((bool) $this->includesLastFolderInRange);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return SyncFolderHierarchyResponseMessageType
     */
    public function setIncludesLastFolderInRange($value)
    {
        $this->includesLastFolderInRange = $this->castValueIfNeeded("includesLastFolderInRange", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\SyncFolderHierarchyChangesType
     * @return SyncFolderHierarchyResponseMessageType
     */
    public function setChanges(\garethp\ews\API\Type\SyncFolderHierarchyChangesType $value)
    {
        $this->changes = $this->castValueIfNeeded("changes", $value);
        return $this;
    }
}
