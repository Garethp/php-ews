<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AbsoluteYearlyRecurrencePatternType
 *
 *
 * XSD Type: AbsoluteYearlyRecurrencePatternType
 *
 * @method AbsoluteYearlyRecurrencePatternType setDayOfMonth(integer $dayOfMonth)
 * @method AbsoluteYearlyRecurrencePatternType setMonth(string $month)
 */
class AbsoluteYearlyRecurrencePatternType extends RecurrencePatternBaseType
{

    /**
     * @var integer
     */
    protected $dayOfMonth = null;

    /**
     * @var string
     */
    protected $month = null;

    /**
     * @return integer
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }
}
