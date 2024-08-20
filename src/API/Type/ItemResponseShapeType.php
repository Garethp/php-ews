<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ItemResponseShapeType
 *
 *
 * XSD Type: ItemResponseShapeType
 *
 * @method ItemResponseShapeType setBaseShape(string $baseShape)
 * @method ItemResponseShapeType setIncludeMimeContent(boolean $includeMimeContent)
 * @method ItemResponseShapeType setBodyType(string $bodyType)
 * @method ItemResponseShapeType setFilterHtmlContent(boolean $filterHtmlContent)
 * @method ItemResponseShapeType setConvertHtmlCodePageToUTF8(boolean $convertHtmlCodePageToUTF8)
 * @method ItemResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class ItemResponseShapeType extends Type
{

    /**
     * @var string
     */
    protected $baseShape = null;

    /**
     * @var boolean
     */
    protected $includeMimeContent = null;

    /**
     * @var string
     */
    protected $bodyType = null;

    /**
     * @var boolean
     */
    protected $filterHtmlContent = null;

    /**
     * @var boolean
     */
    protected $convertHtmlCodePageToUTF8 = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfPathsToElementType
     */
    protected $additionalProperties = null;

    /**
     * @return string
     */
    public function getBaseShape()
    {
        return $this->baseShape;
    }

    /**
     * @returns bool
     */
    public function isIncludeMimeContent()
    {
        return ((bool) $this->includeMimeContent);
    }

    /**
     * @return boolean
     */
    public function getIncludeMimeContent()
    {
        return $this->includeMimeContent;
    }

    /**
     * @return string
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * @returns bool
     */
    public function isFilterHtmlContent()
    {
        return ((bool) $this->filterHtmlContent);
    }

    /**
     * @return boolean
     */
    public function getFilterHtmlContent()
    {
        return $this->filterHtmlContent;
    }

    /**
     * @returns bool
     */
    public function isConvertHtmlCodePageToUTF8()
    {
        return ((bool) $this->convertHtmlCodePageToUTF8);
    }

    /**
     * @return boolean
     */
    public function getConvertHtmlCodePageToUTF8()
    {
        return $this->convertHtmlCodePageToUTF8;
    }

    /**
     * @return NonEmptyArrayOfPathsToElementType
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}
