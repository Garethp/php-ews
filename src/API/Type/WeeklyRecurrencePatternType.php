<?php

namespace garethp\ews\API\Type;

/**
 * Class representing WeeklyRecurrencePatternType
 *
 *
 * XSD Type: WeeklyRecurrencePatternType
 *
 * @method WeeklyRecurrencePatternType addDaysOfWeek(string $daysOfWeek)
 * @method WeeklyRecurrencePatternType setDaysOfWeek(array $daysOfWeek)
 * @method WeeklyRecurrencePatternType setFirstDayOfWeek(string $firstDayOfWeek)
 */
class WeeklyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @var string[]
     */
    protected $daysOfWeek = null;

    /**
     * @var string
     */
    protected $firstDayOfWeek = null;

    /**
     * @return string[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * @return string
     */
    public function getFirstDayOfWeek()
    {
        return $this->firstDayOfWeek;
    }
}
