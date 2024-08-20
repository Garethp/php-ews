<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RelativeMonthlyRecurrencePatternType
 *
 *
 * XSD Type: RelativeMonthlyRecurrencePatternType
 *
 * @method RelativeMonthlyRecurrencePatternType setDaysOfWeek(string $daysOfWeek)
 * @method RelativeMonthlyRecurrencePatternType setDayOfWeekIndex(string $dayOfWeekIndex)
 */
class RelativeMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @var string
     */
    protected $daysOfWeek = null;

    /**
     * @var string
     */
    protected $dayOfWeekIndex = null;

    /**
     * @return string
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * @return string
     */
    public function getDayOfWeekIndex()
    {
        return $this->dayOfWeekIndex;
    }
}
