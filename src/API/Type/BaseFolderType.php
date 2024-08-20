<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BaseFolderType
 *
 *
 * XSD Type: BaseFolderType
 *
 * @method BaseFolderType setFolderId(FolderIdType $folderId)
 * @method BaseFolderType setParentFolderId(FolderIdType $parentFolderId)
 * @method BaseFolderType setFolderClass(string $folderClass)
 * @method BaseFolderType setDisplayName(string $displayName)
 * @method BaseFolderType setTotalCount(integer $totalCount)
 * @method BaseFolderType setChildFolderCount(integer $childFolderCount)
 * @method BaseFolderType addExtendedProperty(ExtendedPropertyType $extendedProperty)
 * @method BaseFolderType setExtendedProperty(array $extendedProperty)
 * @method BaseFolderType setManagedFolderInformation(ManagedFolderInformationType $managedFolderInformation)
 * @method BaseFolderType setEffectiveRights(EffectiveRightsType $effectiveRights)
 */
class BaseFolderType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var string
     */
    protected $folderClass = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var integer
     */
    protected $totalCount = null;

    /**
     * @var integer
     */
    protected $childFolderCount = null;

    /**
     * @var \garethp\ews\API\Type\ExtendedPropertyType[]
     */
    protected $extendedProperty = null;

    /**
     * @var \garethp\ews\API\Type\ManagedFolderInformationType
     */
    protected $managedFolderInformation = null;

    /**
     * @var \garethp\ews\API\Type\EffectiveRightsType
     */
    protected $effectiveRights = null;

    /**
     * @return FolderIdType
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @return FolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @return string
     */
    public function getFolderClass()
    {
        return $this->folderClass;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return integer
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @return integer
     */
    public function getChildFolderCount()
    {
        return $this->childFolderCount;
    }

    /**
     * @return ExtendedPropertyType[]
     */
    public function getExtendedProperty()
    {
        return $this->extendedProperty;
    }

    /**
     * @return ManagedFolderInformationType
     */
    public function getManagedFolderInformation()
    {
        return $this->managedFolderInformation;
    }

    /**
     * @return EffectiveRightsType
     */
    public function getEffectiveRights()
    {
        return $this->effectiveRights;
    }
}
