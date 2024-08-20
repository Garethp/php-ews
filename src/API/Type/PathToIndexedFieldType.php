<?php

namespace garethp\ews\API\Type;

/**
 * Class representing PathToIndexedFieldType
 *
 *
 * XSD Type: PathToIndexedFieldType
 *
 * @method PathToIndexedFieldType setFieldURI(string $fieldURI)
 * @method PathToIndexedFieldType setFieldIndex(string $fieldIndex)
 */
class PathToIndexedFieldType extends BasePathToElementType
{

    /**
     * @var string
     */
    protected $fieldURI = null;

    /**
     * @var string
     */
    protected $fieldIndex = null;

    /**
     * @return string
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }

    /**
     * @return string
     */
    public function getFieldIndex()
    {
        return $this->fieldIndex;
    }
}
