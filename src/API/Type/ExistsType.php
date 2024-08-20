<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ExistsType
 *
 *
 * XSD Type: ExistsType
 *
 * @method ExistsType addFieldURI(FieldURI $fieldURI)
 * @method ExistsType setFieldURI(array $fieldURI)
 * @method ExistsType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method ExistsType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExistsType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExistsType setExtendedFieldURI(array $extendedFieldURI)
 */
class ExistsType extends SearchExpressionType
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
     * @return IndexedFieldURI[]
     */
    public function getIndexedFieldURI()
    {
        return $this->indexedFieldURI;
    }

    /**
     * @return ExtendedFieldURI[]
     */
    public function getExtendedFieldURI()
    {
        return $this->extendedFieldURI;
    }
}
