<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ContainsExpressionType
 *
 *
 * XSD Type: ContainsExpressionType
 *
 * @method ContainsExpressionType setContainmentMode(string $containmentMode)
 * @method ContainsExpressionType setContainmentComparison(string $containmentComparison)
 * @method ContainsExpressionType addFieldURI(FieldURI $fieldURI)
 * @method ContainsExpressionType setFieldURI(array $fieldURI)
 * @method ContainsExpressionType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method ContainsExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method ContainsExpressionType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ContainsExpressionType setExtendedFieldURI(array $extendedFieldURI)
 * @method ContainsExpressionType setConstant(ConstantValueType $constant)
 */
class ContainsExpressionType extends SearchExpressionType
{

    /**
     * @var string
     */
    protected $containmentMode = null;

    /**
     * @var string
     */
    protected $containmentComparison = null;

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
     * @var \garethp\ews\API\Type\ConstantValueType
     */
    protected $constant = null;

    /**
     * @return string
     */
    public function getContainmentMode()
    {
        return $this->containmentMode;
    }

    /**
     * @return string
     */
    public function getContainmentComparison()
    {
        return $this->containmentComparison;
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

    /**
     * @return ConstantValueType
     */
    public function getConstant()
    {
        return $this->constant;
    }
}
