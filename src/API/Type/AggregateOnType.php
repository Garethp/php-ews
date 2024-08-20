<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing AggregateOnType
 *
 * Represents the field of each item to aggregate on and the qualifier to apply to that
 *  field in determining which item will represent the group.
 * XSD Type: AggregateOnType
 *
 * @method AggregateOnType setAggregate(string $aggregate)
 * @method AggregateOnType setFieldURI(PathToUnindexedFieldType $fieldURI)
 * @method AggregateOnType setIndexedFieldURI(PathToIndexedFieldType $indexedFieldURI)
 * @method AggregateOnType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
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
     * @return string
     */
    public function getAggregate()
    {
        return $this->aggregate;
    }

    /**
     * @return PathToUnindexedFieldType
     */
    public function getFieldURI()
    {
        return $this->fieldURI;
    }

    /**
     * @return PathToIndexedFieldType
     */
    public function getIndexedFieldURI()
    {
        return $this->indexedFieldURI;
    }

    /**
     * @return PathToExtendedFieldType
     */
    public function getExtendedFieldURI()
    {
        return $this->extendedFieldURI;
    }
}
