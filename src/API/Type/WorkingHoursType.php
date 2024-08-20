<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing WorkingHoursType
 *
 *
 * XSD Type: WorkingHours
 *
 * @method WorkingHoursType setTimeZone(SerializableTimeZoneType $timeZone)
 * @method WorkingHoursType addWorkingPeriodArray(WorkingPeriodType $workingPeriodArray)
 * @method WorkingHoursType setWorkingPeriodArray(array $workingPeriodArray)
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
     * @return WorkingPeriodType[]
     */
    public function getWorkingPeriodArray()
    {
        return $this->workingPeriodArray;
    }
}
