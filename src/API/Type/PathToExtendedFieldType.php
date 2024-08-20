<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PathToExtendedFieldType
 *
 * Represents an extended property. Note that there are only a couple of valid attribute
 *  combinations. Note that all occurances require the PropertyType attribute.
 *
 *  1. (DistinguishedPropertySetId || PropertySetId) + (PropertyName || Property Id)
 *  2. PropertyTag
 * XSD Type: PathToExtendedFieldType
 *
 * @method PathToExtendedFieldType setDistinguishedPropertySetId(string $distinguishedPropertySetId)
 * @method PathToExtendedFieldType setPropertySetId(string $propertySetId)
 * @method PathToExtendedFieldType setPropertyTag(integer $propertyTag)
 * @method PathToExtendedFieldType setPropertyName(string $propertyName)
 * @method PathToExtendedFieldType setPropertyId(integer $propertyId)
 * @method PathToExtendedFieldType setPropertyType(string $propertyType)
 */
class PathToExtendedFieldType extends BasePathToElementType
{

    /**
     * @var string
     */
    protected $distinguishedPropertySetId = null;

    /**
     * @var string
     */
    protected $propertySetId = null;

    /**
     * @var integer
     */
    protected $propertyTag = null;

    /**
     * @var string
     */
    protected $propertyName = null;

    /**
     * @var integer
     */
    protected $propertyId = null;

    /**
     * @var string
     */
    protected $propertyType = null;

    /**
     * @return string
     */
    public function getDistinguishedPropertySetId()
    {
        return $this->distinguishedPropertySetId;
    }

    /**
     * @return string
     */
    public function getPropertySetId()
    {
        return $this->propertySetId;
    }

    /**
     * @return integer
     */
    public function getPropertyTag()
    {
        return $this->propertyTag;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * @return integer
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * @return string
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }
}
