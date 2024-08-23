<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderItemsChangesType
 *
 *
 * XSD Type: SyncFolderItemsChangesType
 *
 * @method SyncFolderItemsChangesType addCreate(SyncFolderItemsCreateOrUpdateType $create)
 * @method SyncFolderItemsChangesType addUpdate(SyncFolderItemsCreateOrUpdateType $update)
 * @method SyncFolderItemsChangesType addDelete(SyncFolderItemsDeleteType $delete)
 * @method SyncFolderItemsChangesType addReadFlagChange(SyncFolderItemsReadFlagType $readFlagChange)
 */
class SyncFolderItemsChangesType extends Type
{

    /**
     * @var \garethp\ews\API\Type\SyncFolderItemsCreateOrUpdateType[]
     */
    protected $create = null;

    /**
     * @var \garethp\ews\API\Type\SyncFolderItemsCreateOrUpdateType[]
     */
    protected $update = null;

    /**
     * @var \garethp\ews\API\Type\SyncFolderItemsDeleteType[]
     */
    protected $delete = null;

    /**
     * @var \garethp\ews\API\Type\SyncFolderItemsReadFlagType[]
     */
    protected $readFlagChange = null;

    /**
     * @return SyncFolderItemsCreateOrUpdateType[]
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * @return SyncFolderItemsCreateOrUpdateType[]
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @return SyncFolderItemsDeleteType[]
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @return SyncFolderItemsReadFlagType[]
     */
    public function getReadFlagChange()
    {
        return $this->readFlagChange;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderItemsCreateOrUpdateType[]
     * @return SyncFolderItemsChangesType
     */
    public function setCreate(array $value)
    {
        $this->create = $this->castValueIfNeeded("create", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderItemsCreateOrUpdateType[]
     * @return SyncFolderItemsChangesType
     */
    public function setUpdate(array $value)
    {
        $this->update = $this->castValueIfNeeded("update", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderItemsDeleteType[]
     * @return SyncFolderItemsChangesType
     */
    public function setDelete(array $value)
    {
        $this->delete = $this->castValueIfNeeded("delete", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderItemsReadFlagType[]
     * @return SyncFolderItemsChangesType
     */
    public function setReadFlagChange(array $value)
    {
        $this->readFlagChange = $this->castValueIfNeeded("readFlagChange", $value);
        return $this;
    }
}
