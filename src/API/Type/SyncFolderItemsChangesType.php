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
 * @method SyncFolderItemsChangesType setCreate(array $create)
 * @method SyncFolderItemsChangesType addUpdate(SyncFolderItemsCreateOrUpdateType $update)
 * @method SyncFolderItemsChangesType setUpdate(array $update)
 * @method SyncFolderItemsChangesType addDelete(SyncFolderItemsDeleteType $delete)
 * @method SyncFolderItemsChangesType setDelete(array $delete)
 * @method SyncFolderItemsChangesType addReadFlagChange(SyncFolderItemsReadFlagType $readFlagChange)
 * @method SyncFolderItemsChangesType setReadFlagChange(array $readFlagChange)
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
}
