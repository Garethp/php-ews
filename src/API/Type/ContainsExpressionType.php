<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ContainsExpressionType
 *
 *
 * XSD Type: ContainsExpressionType
 *
 * @method ContainsExpressionType addFieldURI(FieldURI $fieldURI)
 * @method ContainsExpressionType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method ContainsExpressionType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContainsExpressionType
     */
    public function setContainmentMode($value)
    {
        $this->containmentMode = $this->castValueIfNeeded("containmentMode", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContainsExpressionType
     */
    public function setContainmentComparison($value)
    {
        $this->containmentComparison = $this->castValueIfNeeded("containmentComparison", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FieldURI[]
     * @return ContainsExpressionType
     */
    public function setFieldURI(array $value)
    {
        $this->fieldURI = $this->castValueIfNeeded("fieldURI", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IndexedFieldURI[]
     * @return ContainsExpressionType
     */
    public function setIndexedFieldURI(array $value)
    {
        $this->indexedFieldURI = $this->castValueIfNeeded("indexedFieldURI", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedFieldURI[]
     * @return ContainsExpressionType
     */
    public function setExtendedFieldURI(array $value)
    {
        $this->extendedFieldURI = $this->castValueIfNeeded("extendedFieldURI", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ConstantValueType
     * @return ContainsExpressionType
     */
    public function setConstant(ConstantValueType $value)
    {
        $this->constant = $this->castValueIfNeeded("constant", $value);
        return $this;
    }
}
