<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FieldOrderType
 *
 *
 * XSD Type: FieldOrderType
 *
 * @method FieldOrderType setOrder(string $order)
 * @method FieldOrderType addFieldURI(FieldURI $fieldURI)
 * @method FieldOrderType setFieldURI(array $fieldURI)
 * @method FieldOrderType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method FieldOrderType setIndexedFieldURI(array $indexedFieldURI)
 * @method FieldOrderType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method FieldOrderType setExtendedFieldURI(array $extendedFieldURI)
 */
class FieldOrderType extends Type
{

    /**
     * @var string
     */
    protected $order = null;

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
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

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
