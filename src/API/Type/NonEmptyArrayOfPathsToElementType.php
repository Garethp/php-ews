<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfPathsToElementType
 *
 *
 * XSD Type: NonEmptyArrayOfPathsToElementType
 *
 * @method NonEmptyArrayOfPathsToElementType addFieldURI(FieldURI $fieldURI)
 * @method NonEmptyArrayOfPathsToElementType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method NonEmptyArrayOfPathsToElementType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 */
class NonEmptyArrayOfPathsToElementType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \garethp\ews\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;

    /**
     * @return FieldURI[]
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FieldURI[]
     * @return NonEmptyArrayOfPathsToElementType
     */
    public function setFieldURI(array $value)
    {
        $this->fieldURI = $this->castValueIfNeeded("fieldURI", $value);
        return $this;
    }

    /**
     * @return IndexedFieldURI[]
     */
    public function getIndexedFieldURI()
    {
        return $this->indexedFieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IndexedFieldURI[]
     * @return NonEmptyArrayOfPathsToElementType
     */
    public function setIndexedFieldURI(array $value)
    {
        $this->indexedFieldURI = $this->castValueIfNeeded("indexedFieldURI", $value);
        return $this;
    }

    /**
     * @return ExtendedFieldURI[]
     */
    public function getExtendedFieldURI()
    {
        return $this->extendedFieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedFieldURI[]
     * @return NonEmptyArrayOfPathsToElementType
     */
    public function setExtendedFieldURI(array $value)
    {
        $this->extendedFieldURI = $this->castValueIfNeeded("extendedFieldURI", $value);
        return $this;
    }
}
