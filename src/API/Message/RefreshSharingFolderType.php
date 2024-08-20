<?php

namespace garethp\ews\API\Message;

/**
 * Class representing RefreshSharingFolderType
 *
 *
 * XSD Type: RefreshSharingFolderType
 *
 * @method RefreshSharingFolderType setSharingFolderId(\garethp\ews\API\Type\FolderIdType $sharingFolderId)
 */
class RefreshSharingFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;

    /**
     * @return \garethp\ews\API\Type\FolderIdType
     */
    public function getSharingFolderId()
    {
        return $this->sharingFolderId;
    }
}
