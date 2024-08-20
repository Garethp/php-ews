<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TaskRecurrenceType
 *
 *
 * XSD Type: TaskRecurrenceType
 *
 * @method TaskRecurrenceType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method TaskRecurrenceType setAbsoluteYearlyRecurrence(AbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence)
 * @method TaskRecurrenceType setRelativeMonthlyRecurrence(RelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence)
 * @method TaskRecurrenceType setAbsoluteMonthlyRecurrence(AbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence)
 * @method TaskRecurrenceType setWeeklyRecurrence(WeeklyRecurrencePatternType $weeklyRecurrence)
 * @method TaskRecurrenceType setDailyRecurrence(DailyRecurrencePatternType $dailyRecurrence)
 * @method TaskRecurrenceType setDailyRegeneration(DailyRegeneratingPatternType $dailyRegeneration)
 * @method TaskRecurrenceType setWeeklyRegeneration(WeeklyRegeneratingPatternType $weeklyRegeneration)
 * @method TaskRecurrenceType setMonthlyRegeneration(MonthlyRegeneratingPatternType $monthlyRegeneration)
 * @method TaskRecurrenceType setYearlyRegeneration(YearlyRegeneratingPatternType $yearlyRegeneration)
 * @method TaskRecurrenceType setNoEndRecurrence(NoEndRecurrenceRangeType $noEndRecurrence)
 * @method TaskRecurrenceType setEndDateRecurrence(EndDateRecurrenceRangeType $endDateRecurrence)
 * @method TaskRecurrenceType setNumberedRecurrence(NumberedRecurrenceRangeType $numberedRecurrence)
 */
class TaskRecurrenceType extends Type
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
     * @var \garethp\ews\API\Type\DailyRegeneratingPatternType
     */
    protected $dailyRegeneration = null;

    /**
     * @var \garethp\ews\API\Type\WeeklyRegeneratingPatternType
     */
    protected $weeklyRegeneration = null;

    /**
     * @var \garethp\ews\API\Type\MonthlyRegeneratingPatternType
     */
    protected $monthlyRegeneration = null;

    /**
     * @var \garethp\ews\API\Type\YearlyRegeneratingPatternType
     */
    protected $yearlyRegeneration = null;

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
     * @return DailyRegeneratingPatternType
     */
    public function getDailyRegeneration()
    {
        return $this->dailyRegeneration;
    }

    /**
     * @return WeeklyRegeneratingPatternType
     */
    public function getWeeklyRegeneration()
    {
        return $this->weeklyRegeneration;
    }

    /**
     * @return MonthlyRegeneratingPatternType
     */
    public function getMonthlyRegeneration()
    {
        return $this->monthlyRegeneration;
    }

    /**
     * @return YearlyRegeneratingPatternType
     */
    public function getYearlyRegeneration()
    {
        return $this->yearlyRegeneration;
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
