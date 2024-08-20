<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing WorkingPeriodType
 *
 *
 * XSD Type: WorkingPeriod
 *
 * @method WorkingPeriodType addDayOfWeek(string $dayOfWeek)
 * @method WorkingPeriodType setDayOfWeek(array $dayOfWeek)
 * @method WorkingPeriodType setStartTimeInMinutes(integer $startTimeInMinutes)
 * @method WorkingPeriodType setEndTimeInMinutes(integer $endTimeInMinutes)
 */
class WorkingPeriodType extends Type
{

    /**
     * @var string[]
     */
    protected $dayOfWeek = null;

    /**
     * @var integer
     */
    protected $startTimeInMinutes = null;

    /**
     * @var integer
     */
    protected $endTimeInMinutes = null;

    /**
     * @return string[]
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @return integer
     */
    public function getStartTimeInMinutes()
    {
        return $this->startTimeInMinutes;
    }

    /**
     * @return integer
     */
    public function getEndTimeInMinutes()
    {
        return $this->endTimeInMinutes;
    }
}
