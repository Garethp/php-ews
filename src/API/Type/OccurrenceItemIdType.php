<?php

namespace garethp\ews\API\Type;

/**
 * Class representing OccurrenceItemIdType
 *
 *
 * XSD Type: OccurrenceItemIdType
 *
 * @method OccurrenceItemIdType setRecurringMasterId(string $recurringMasterId)
 * @method OccurrenceItemIdType setChangeKey(string $changeKey)
 * @method OccurrenceItemIdType setInstanceIndex(integer $instanceIndex)
 */
class OccurrenceItemIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $recurringMasterId = null;

    /**
     * @var string
     */
    protected $changeKey = null;

    /**
     * @var integer
     */
    protected $instanceIndex = null;

    /**
     * @return string
     */
    public function getRecurringMasterId()
    {
        return $this->recurringMasterId;
    }

    /**
     * @return string
     */
    public function getChangeKey()
    {
        return $this->changeKey;
    }

    /**
     * @return integer
     */
    public function getInstanceIndex()
    {
        return $this->instanceIndex;
    }
}
