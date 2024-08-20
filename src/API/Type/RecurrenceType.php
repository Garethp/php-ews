<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RecurrenceType
 *
 *
 * XSD Type: RecurrenceType
 *
 * @method RecurrenceType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method RecurrenceType setAbsoluteYearlyRecurrence(AbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence)
 * @method RecurrenceType setRelativeMonthlyRecurrence(RelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence)
 * @method RecurrenceType setAbsoluteMonthlyRecurrence(AbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence)
 * @method RecurrenceType setWeeklyRecurrence(WeeklyRecurrencePatternType $weeklyRecurrence)
 * @method RecurrenceType setDailyRecurrence(DailyRecurrencePatternType $dailyRecurrence)
 * @method RecurrenceType setNoEndRecurrence(NoEndRecurrenceRangeType $noEndRecurrence)
 * @method RecurrenceType setEndDateRecurrence(EndDateRecurrenceRangeType $endDateRecurrence)
 * @method RecurrenceType setNumberedRecurrence(NumberedRecurrenceRangeType $numberedRecurrence)
 */
class RecurrenceType extends Type
{

    /**
     * @var \garethp\ews\API\Type\RelativeYearlyRecurrencePatternType
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\AbsoluteYearlyRecurrencePatternType
     */
    protected $absoluteYearlyRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\RelativeMonthlyRecurrencePatternType
     */
    protected $relativeMonthlyRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\AbsoluteMonthlyRecurrencePatternType
     */
    protected $absoluteMonthlyRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\WeeklyRecurrencePatternType
     */
    protected $weeklyRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\DailyRecurrencePatternType
     */
    protected $dailyRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\NoEndRecurrenceRangeType
     */
    protected $noEndRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\EndDateRecurrenceRangeType
     */
    protected $endDateRecurrence = null;

    /**
     * @var \garethp\ews\API\Type\NumberedRecurrenceRangeType
     */
    protected $numberedRecurrence = null;

    /**
     * @return RelativeYearlyRecurrencePatternType
     */
    public function getRelativeYearlyRecurrence()
    {
        return $this->relativeYearlyRecurrence;
    }

    /**
     * @return AbsoluteYearlyRecurrencePatternType
     */
    public function getAbsoluteYearlyRecurrence()
    {
        return $this->absoluteYearlyRecurrence;
    }

    /**
     * @return RelativeMonthlyRecurrencePatternType
     */
    public function getRelativeMonthlyRecurrence()
    {
        return $this->relativeMonthlyRecurrence;
    }

    /**
     * @return AbsoluteMonthlyRecurrencePatternType
     */
    public function getAbsoluteMonthlyRecurrence()
    {
        return $this->absoluteMonthlyRecurrence;
    }

    /**
     * @return WeeklyRecurrencePatternType
     */
    public function getWeeklyRecurrence()
    {
        return $this->weeklyRecurrence;
    }

    /**
     * @return DailyRecurrencePatternType
     */
    public function getDailyRecurrence()
    {
        return $this->dailyRecurrence;
    }

    /**
     * @return NoEndRecurrenceRangeType
     */
    public function getNoEndRecurrence()
    {
        return $this->noEndRecurrence;
    }

    /**
     * @return EndDateRecurrenceRangeType
     */
    public function getEndDateRecurrence()
    {
        return $this->endDateRecurrence;
    }

    /**
     * @return NumberedRecurrenceRangeType
     */
    public function getNumberedRecurrence()
    {
        return $this->numberedRecurrence;
    }
}
