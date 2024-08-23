<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing WorkingHoursType
 *
 *
 * XSD Type: WorkingHours
 *
 * @method WorkingHoursType addWorkingPeriodArray(WorkingPeriodType $workingPeriodArray)
 */
class WorkingHoursType extends Type
{

    /**
     * @var \garethp\ews\API\Type\SerializableTimeZoneType
     */
    protected $timeZone = null;

    /**
     * @var \garethp\ews\API\Type\WorkingPeriodType[]
     */
    protected $workingPeriodArray = null;

    /**
     * @return SerializableTimeZoneType
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SerializableTimeZoneType
     * @return WorkingHoursType
     */
    public function setTimeZone(SerializableTimeZoneType $value)
    {
        $this->timeZone = $this->castValueIfNeeded("timeZone", $value);
        return $this;
    }

    /**
     * @return WorkingPeriodType[]
     */
    public function getWorkingPeriodArray()
    {
        return $this->workingPeriodArray;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value WorkingPeriodType[]
     * @return WorkingHoursType
     */
    public function setWorkingPeriodArray(array $value)
    {
        $this->workingPeriodArray = $this->castValueIfNeeded("workingPeriodArray", $value);
        return $this;
    }
}
