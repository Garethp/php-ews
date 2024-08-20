<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RecurringTimeTransitionType
 *
 *
 * XSD Type: RecurringTimeTransitionType
 *
 * @method RecurringTimeTransitionType setTimeOffset(\DateInterval $timeOffset)
 * @method RecurringTimeTransitionType setMonth(integer $month)
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
     * @return \DateInterval
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }

    /**
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }
}
