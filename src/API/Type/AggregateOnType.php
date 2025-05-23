<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing AggregateOnType
 *
 * Represents the field of each item to aggregate on and the qualifier to apply to
 * that
 *  field in determining which item will represent the group.
 * XSD Type: AggregateOnType
 */
class AggregateOnType extends Type
{

    /**
     * @var string
     */
    protected $aggregate = null;

    /**
     * @var \garethp\ews\API\Type\PathToUnindexedFieldType
     */
    protected $fieldURI = null;

    /**
     * @var \garethp\ews\API\Type\PathToIndexedFieldType
     */
    protected $indexedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\PathToExtendedFieldType
     */
    protected $extendedFieldURI = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getAggregate()
    {
        return $this->aggregate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return AggregateOnType
     */
    public function setAggregate($value)
    {
        $this->aggregate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PathToUnindexedFieldType
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PathToUnindexedFieldType
     * @return AggregateOnType
     */
    public function setFieldURI(PathToUnindexedFieldType $value)
    {
        $this->fieldURI = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PathToIndexedFieldType
     */
    public function getIndexedFieldURI()
    {
        return $this->indexedFieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PathToIndexedFieldType
     * @return AggregateOnType
     */
    public function setIndexedFieldURI(PathToIndexedFieldType $value)
    {
        $this->indexedFieldURI = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PathToExtendedFieldType
     */
    public function getExtendedFieldURI()
    {
        return $this->extendedFieldURI;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PathToExtendedFieldType
     * @return AggregateOnType
     */
    public function setExtendedFieldURI(PathToExtendedFieldType $value)
    {
        $this->extendedFieldURI = $value;
        return $this;
    }
}
