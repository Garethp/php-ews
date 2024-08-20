<?php

namespace garethp\ews\API\Type;

/**
 * Class representing NumberedRecurrenceRangeType
 *
 *
 * XSD Type: NumberedRecurrenceRangeType
 *
 * @method NumberedRecurrenceRangeType setNumberOfOccurrences(integer $numberOfOccurrences)
 */
class NumberedRecurrenceRangeType extends RecurrenceRangeBaseType
{

    /**
     * @var integer
     */
    protected $numberOfOccurrences = null;

    /**
     * @return integer
     */
    public function getNumberOfOccurrences()
    {
        return $this->numberOfOccurrences;
    }
}
