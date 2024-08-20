<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RelativeYearlyRecurrencePatternType
 *
 *
 * XSD Type: RelativeYearlyRecurrencePatternType
 *
 * @method RelativeYearlyRecurrencePatternType setDaysOfWeek(string $daysOfWeek)
 * @method RelativeYearlyRecurrencePatternType setDayOfWeekIndex(string $dayOfWeekIndex)
 * @method RelativeYearlyRecurrencePatternType setMonth(string $month)
 */
class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
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
     * @var string
     */
    protected $month = null;

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

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }
}
