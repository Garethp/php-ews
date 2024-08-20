<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PathToExceptionFieldType
 *
 *
 * XSD Type: PathToExceptionFieldType
 *
 * @method PathToExceptionFieldType setFieldURI(string $fieldURI)
 */
class PathToExceptionFieldType extends BasePathToElementType
{

    /**
     * @var string
     */
    protected $fieldURI = null;

    /**
     * @return string
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }
}
