<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType
     * @return TargetFolderIdType
     */
    public function setFolderId(FolderIdType $value)
    {
        $this->folderId = $this->castValueIfNeeded("folderId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DistinguishedFolderIdType
     * @return TargetFolderIdType
     */
    public function setDistinguishedFolderId(DistinguishedFolderIdType $value)
    {
        $this->distinguishedFolderId = $this->castValueIfNeeded("distinguishedFolderId", $value);
        return $this;
    }
}
