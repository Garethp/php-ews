<?php

namespace garethp\ews\API\Type;

/**
 * Class representing TwoOperandExpressionType
 *
 *
 * XSD Type: TwoOperandExpressionType
 *
 * @method TwoOperandExpressionType addFieldURI(FieldURI $fieldURI)
 * @method TwoOperandExpressionType setFieldURI(array $fieldURI)
 * @method TwoOperandExpressionType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method TwoOperandExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method TwoOperandExpressionType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method TwoOperandExpressionType setExtendedFieldURI(array $extendedFieldURI)
 * @method TwoOperandExpressionType setFieldURIOrConstant(FieldURIOrConstantType $fieldURIOrConstant)
 */
class TwoOperandExpressionType extends SearchExpressionType
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
     * @var \garethp\ews\API\Type\FieldURIOrConstantType
     */
    protected $fieldURIOrConstant = null;

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
     * @return FieldURIOrConstantType
     */
    public function getFieldURIOrConstant()
    {
        return $this->fieldURIOrConstant;
    }
}
