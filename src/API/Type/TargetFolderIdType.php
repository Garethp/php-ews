<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
 *
 * @method TargetFolderIdType setFolderId(FolderIdType $folderId)
 * @method TargetFolderIdType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 */
class TargetFolderIdType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;

    /**
     * @return FolderIdType
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @return DistinguishedFolderIdType
     */
    public function getDistinguishedFolderId()
    {
        return $this->distinguishedFolderId;
    }
}
