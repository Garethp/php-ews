<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfTransitionsType
 *
 *
 * XSD Type: ArrayOfTransitionsType
 *
 * @method ArrayOfTransitionsType setId(string $id)
 * @method ArrayOfTransitionsType addAbsoluteDateTransition(AbsoluteDateTransition $absoluteDateTransition)
 * @method ArrayOfTransitionsType setAbsoluteDateTransition(array $absoluteDateTransition)
 * @method ArrayOfTransitionsType addRecurringDayTransition(RecurringDayTransition $recurringDayTransition)
 * @method ArrayOfTransitionsType setRecurringDayTransition(array $recurringDayTransition)
 * @method ArrayOfTransitionsType addRecurringDateTransition(RecurringDateTransition $recurringDateTransition)
 * @method ArrayOfTransitionsType setRecurringDateTransition(array $recurringDateTransition)
 * @method ArrayOfTransitionsType addTransition(Transition $transition)
 * @method ArrayOfTransitionsType setTransition(array $transition)
 */
class ArrayOfTransitionsType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var \garethp\ews\API\Type\AbsoluteDateTransition[]
     */
    protected $absoluteDateTransition = null;

    /**
     * @var \garethp\ews\API\Type\RecurringDayTransition[]
     */
    protected $recurringDayTransition = null;

    /**
     * @var \garethp\ews\API\Type\RecurringDateTransition[]
     */
    protected $recurringDateTransition = null;

    /**
     * @var \garethp\ews\API\Type\Transition[]
     */
    protected $transition = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return AbsoluteDateTransition[]
     */
    public function getAbsoluteDateTransition()
    {
        return $this->absoluteDateTransition;
    }

    /**
     * @return RecurringDayTransition[]
     */
    public function getRecurringDayTransition()
    {
        return $this->recurringDayTransition;
    }

    /**
     * @return RecurringDateTransition[]
     */
    public function getRecurringDateTransition()
    {
        return $this->recurringDateTransition;
    }

    /**
     * @return Transition[]
     */
    public function getTransition()
    {
        return $this->transition;
    }
}
