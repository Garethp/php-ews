<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AbsoluteMonthlyRecurrencePatternType
 *
 *
 * XSD Type: AbsoluteMonthlyRecurrencePatternType
 *
 * @method AbsoluteMonthlyRecurrencePatternType setDayOfMonth(integer $dayOfMonth)
 */
class AbsoluteMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @var integer
     */
    protected $dayOfMonth = null;

    /**
     * @return integer
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }
}
