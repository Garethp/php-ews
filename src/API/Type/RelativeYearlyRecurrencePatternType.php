<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RelativeYearlyRecurrencePatternType
 *
 *
 * XSD Type: RelativeYearlyRecurrencePatternType
 *
 * @method RelativeYearlyRecurrencePatternType addDaysOfWeek(string $daysOfWeek)
 * @method string[] getDaysOfWeek()
 * @method RelativeYearlyRecurrencePatternType setDaysOfWeek(array $daysOfWeek)
 * @method string getDayOfWeekIndex()
 * @method RelativeYearlyRecurrencePatternType setDayOfWeekIndex(string $dayOfWeekIndex)
 * @method string getMonth()
 * @method RelativeYearlyRecurrencePatternType setMonth(string $month)
 */
class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
{

    /**
     * @var array
     */
    protected $daysOfWeek = null;

    /**
     * @var string
     */
    protected $dayOfWeekIndex = null;

    /**
     * @var string
     */
    protected $month = null;
}
