<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FieldURIOrConstantType
 *
 *
 * XSD Type: FieldURIOrConstantType
 *
 * @method FieldURIOrConstantType setFieldURI(FieldURI $fieldURI)
 * @method FieldURIOrConstantType setIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method FieldURIOrConstantType setExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method FieldURIOrConstantType setConstant(ConstantValueType $constant)
 */
class FieldURIOrConstantType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FieldURI
     */
    protected $fieldURI = null;

    /**
     * @var \garethp\ews\API\Type\IndexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\ExtendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\ConstantValueType
     */
    protected $constant = null;

    /**
     * @return FieldURI
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }

    /**
     * @return IndexedFieldURI
     */
    public function getIndexedFieldURI()
    {
        return $this->indexedFieldURI;
    }

    /**
     * @return ExtendedFieldURI
     */
    public function getExtendedFieldURI()
    {
        return $this->extendedFieldURI;
    }

    /**
     * @return ConstantValueType
     */
    public function getConstant()
    {
        return $this->constant;
    }
}
