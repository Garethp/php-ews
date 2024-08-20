<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing AttachmentResponseShapeType
 *
 *
 * XSD Type: AttachmentResponseShapeType
 *
 * @method AttachmentResponseShapeType setIncludeMimeContent(boolean $includeMimeContent)
 * @method AttachmentResponseShapeType setBodyType(string $bodyType)
 * @method AttachmentResponseShapeType setFilterHtmlContent(boolean $filterHtmlContent)
 * @method AttachmentResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class AttachmentResponseShapeType extends Type
{

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
     * @return NonEmptyArrayOfPathsToElementType
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}
