<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RecurringDateTransitionType
 *
 *
 * XSD Type: RecurringDateTransitionType
 *
 * @method RecurringDateTransitionType setDay(integer $day)
 */
class RecurringDateTransitionType extends RecurringTimeTransitionType
{

    /**
     * @var integer
     */
    protected $day = null;

    /**
     * @return integer
     */
    public function getDay()
    {
        return $this->day;
    }
}
