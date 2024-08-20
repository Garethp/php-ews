<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FolderResponseShapeType
 *
 *
 * XSD Type: FolderResponseShapeType
 *
 * @method FolderResponseShapeType setBaseShape(string $baseShape)
 * @method FolderResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class FolderResponseShapeType extends Type
{

    /**
     * @var string
     */
    protected $baseShape = null;

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
     * @return NonEmptyArrayOfPathsToElementType
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}
