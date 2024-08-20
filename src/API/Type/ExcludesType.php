<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ExcludesType
 *
 *
 * XSD Type: ExcludesType
 *
 * @method ExcludesType addFieldURI(FieldURI $fieldURI)
 * @method ExcludesType setFieldURI(array $fieldURI)
 * @method ExcludesType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method ExcludesType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExcludesType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExcludesType setExtendedFieldURI(array $extendedFieldURI)
 * @method ExcludesType setBitmask(ExcludesValueType $bitmask)
 */
class ExcludesType extends SearchExpressionType
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
     * @var \garethp\ews\API\Type\ExcludesValueType
     */
    protected $bitmask = null;

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

    /**
     * @return ExcludesValueType
     */
    public function getBitmask()
    {
        return $this->bitmask;
    }
}
