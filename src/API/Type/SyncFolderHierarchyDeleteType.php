<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderHierarchyDeleteType
 *
 *
 * XSD Type: SyncFolderHierarchyDeleteType
 *
 * @method SyncFolderHierarchyDeleteType setFolderId(FolderIdType $folderId)
 */
class SyncFolderHierarchyDeleteType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @return FolderIdType
     */
    public function getFolderId()
    {
        return $this->folderId;
    }
}
