<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseFolderIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseFolderIdsType
 */
class NonEmptyArrayOfBaseFolderIdsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType[]
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\DistinguishedFolderIdType[]
     */
    protected $distinguishedFolderId = null;

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function addFolderId(FolderIdType $value)
    {
        $value = $this->castValueIfNeeded("folderId", $value);

        if ($this->folderId === null) {
            $this->folderId = array();
        }

        if (!is_array($this->folderId)) {
            $this->folderId = array($this->folderId);
        }

        $this->folderId[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderIdType[]
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType[]
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function setFolderId(array $value)
    {
        $this->folderId = $this->castValueIfNeeded("folderId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DistinguishedFolderIdType
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function addDistinguishedFolderId(DistinguishedFolderIdType $value)
    {
        $value = $this->castValueIfNeeded("distinguishedFolderId", $value);

        if ($this->distinguishedFolderId === null) {
            $this->distinguishedFolderId = array();
        }

        if (!is_array($this->distinguishedFolderId)) {
            $this->distinguishedFolderId = array($this->distinguishedFolderId);
        }

        $this->distinguishedFolderId[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return DistinguishedFolderIdType[]
     */
    public function getDistinguishedFolderId()
    {
        return $this->distinguishedFolderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DistinguishedFolderIdType[]
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function setDistinguishedFolderId(array $value)
    {
        $this->distinguishedFolderId = $this->castValueIfNeeded("distinguishedFolderId", $value);
        return $this;
    }
}
