<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RecurringDayTransitionType
 *
 *
 * XSD Type: RecurringDayTransitionType
 *
 * @method RecurringDayTransitionType setDayOfWeek(string $dayOfWeek)
 * @method RecurringDayTransitionType setOccurrence(string $occurrence)
 */
class RecurringDayTransitionType extends RecurringTimeTransitionType
{

    /**
     * @var string
     */
    protected $dayOfWeek = null;

    /**
     * @var string
     */
    protected $occurrence = null;

    /**
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @return string
     */
    public function getOccurrence()
    {
        return $this->occurrence;
    }
}
