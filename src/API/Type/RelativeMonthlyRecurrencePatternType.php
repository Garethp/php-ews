<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RelativeMonthlyRecurrencePatternType
 *
 *
 * XSD Type: RelativeMonthlyRecurrencePatternType
 *
 * @method RelativeMonthlyRecurrencePatternType addDaysOfWeek(string $daysOfWeek)
 * @method string[] getDaysOfWeek()
 * @method RelativeMonthlyRecurrencePatternType setDaysOfWeek(array $daysOfWeek)
 * @method string getDayOfWeekIndex()
 * @method RelativeMonthlyRecurrencePatternType setDayOfWeekIndex(string $dayOfWeekIndex)
 */
class RelativeMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @var string[]
     */
    protected $daysOfWeek = null;

    /**
     * @var string
     */
    protected $dayOfWeekIndex = null;
}
