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
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return WorkingPeriodType
     */
    public function setDayOfWeek(array $value)
    {
        $this->dayOfWeek = $this->castValueIfNeeded("dayOfWeek", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getStartTimeInMinutes()
    {
        return $this->startTimeInMinutes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return WorkingPeriodType
     */
    public function setStartTimeInMinutes($value)
    {
        $this->startTimeInMinutes = $this->castValueIfNeeded("startTimeInMinutes", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getEndTimeInMinutes()
    {
        return $this->endTimeInMinutes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return WorkingPeriodType
     */
    public function setEndTimeInMinutes($value)
    {
        $this->endTimeInMinutes = $this->castValueIfNeeded("endTimeInMinutes", $value);
        return $this;
    }
}
