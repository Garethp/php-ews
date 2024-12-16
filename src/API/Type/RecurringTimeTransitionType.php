<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RecurringTimeTransitionType
 *
 *
 * XSD Type: RecurringTimeTransitionType
 */
class RecurringTimeTransitionType extends TransitionType
{

    /**
     * @var \DateInterval
     */
    protected $timeOffset = null;

    /**
     * @var integer
     */
    protected $month = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \DateInterval
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateInterval
     * @return RecurringTimeTransitionType
     */
    public function setTimeOffset(\DateInterval $value)
    {
        $this->timeOffset = $this->castValueIfNeeded("timeOffset", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return RecurringTimeTransitionType
     */
    public function setMonth($value)
    {
        $this->month = $this->castValueIfNeeded("month", $value);
        return $this;
    }
}
