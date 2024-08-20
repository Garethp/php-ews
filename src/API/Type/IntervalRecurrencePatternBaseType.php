<?php

namespace garethp\ews\API\Type;

/**
 * Class representing IntervalRecurrencePatternBaseType
 *
 *
 * XSD Type: IntervalRecurrencePatternBaseType
 *
 * @method IntervalRecurrencePatternBaseType setInterval(integer $interval)
 */
class IntervalRecurrencePatternBaseType extends RecurrencePatternBaseType
{

    /**
     * @var integer
     */
    protected $interval = null;

    /**
     * @return integer
     */
    public function getInterval()
    {
        return $this->interval;
    }
}
