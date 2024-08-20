<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyType
 *
 *
 * XSD Type: SyncFolderHierarchyType
 *
 * @method SyncFolderHierarchyType setFolderShape(\garethp\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method SyncFolderHierarchyType setSyncFolderId(\garethp\ews\API\Type\TargetFolderIdType $syncFolderId)
 * @method SyncFolderHierarchyType setSyncState(string $syncState)
 */
class SyncFolderHierarchyType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @return \garethp\ews\API\Type\FolderResponseShapeType
     */
    public function getFolderShape()
    {
        return $this->folderShape;
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
}
