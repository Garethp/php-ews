<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ItemResponseShapeType
 *
 *
 * XSD Type: ItemResponseShapeType
 *
 * @method string getBaseShape()
 * @method ItemResponseShapeType setBaseShape(string $baseShape)
 * @method boolean getIncludeMimeContent()
 * @method ItemResponseShapeType setIncludeMimeContent(boolean $includeMimeContent)
 * @method string getBodyType()
 * @method ItemResponseShapeType setBodyType(string $bodyType)
 * @method boolean getFilterHtmlContent()
 * @method ItemResponseShapeType setFilterHtmlContent(boolean $filterHtmlContent)
 * @method boolean getConvertHtmlCodePageToUTF8()
 * @method ItemResponseShapeType setConvertHtmlCodePageToUTF8(boolean $convertHtmlCodePageToUTF8)
 * @method NonEmptyArrayOfPathsToElementType getAdditionalProperties()
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
     * @returns bool
     */
    public function isIncludeMimeContent()
    {
        return ((bool) $this->includeMimeContent);
    }

    /**
     * @returns bool
     */
    public function isFilterHtmlContent()
    {
        return ((bool) $this->filterHtmlContent);
    }

    /**
     * @returns bool
     */
    public function isConvertHtmlCodePageToUTF8()
    {
        return ((bool) $this->convertHtmlCodePageToUTF8);
    }
}
