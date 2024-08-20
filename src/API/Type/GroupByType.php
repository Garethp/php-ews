<?php

namespace garethp\ews\API\Type;

/**
 * Class representing GroupByType
 *
 * Allows consumers to specify arbitrary groupings for FindItem queries.
 * XSD Type: GroupByType
 *
 * @method GroupByType setFieldURI(PathToUnindexedFieldType $fieldURI)
 * @method GroupByType setIndexedFieldURI(PathToIndexedFieldType $indexedFieldURI)
 * @method GroupByType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 * @method GroupByType setAggregateOn(AggregateOnType $aggregateOn)
 */
class GroupByType extends BaseGroupByType
{

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
     * @var \garethp\ews\API\Type\AggregateOnType
     */
    protected $aggregateOn = null;

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

    /**
     * @return AggregateOnType
     */
    public function getAggregateOn()
    {
        return $this->aggregateOn;
    }
}
