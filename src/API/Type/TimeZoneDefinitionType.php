<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TimeZoneDefinitionType
 *
 *
 * XSD Type: TimeZoneDefinitionType
 *
 * @method TimeZoneDefinitionType setId(string $id)
 * @method TimeZoneDefinitionType setName(string $name)
 * @method TimeZoneDefinitionType addPeriods(PeriodType $periods)
 * @method TimeZoneDefinitionType setPeriods(array $periods)
 * @method TimeZoneDefinitionType addTransitionsGroups(ArrayOfTransitionsType $transitionsGroups)
 * @method TimeZoneDefinitionType setTransitionsGroups(array $transitionsGroups)
 * @method TimeZoneDefinitionType setTransitions(ArrayOfTransitionsType $transitions)
 */
class TimeZoneDefinitionType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var \garethp\ews\API\Type\PeriodType[]
     */
    protected $periods = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfTransitionsType[]
     */
    protected $transitionsGroups = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfTransitionsType
     */
    protected $transitions = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return PeriodType[]
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * @return ArrayOfTransitionsType[]
     */
    public function getTransitionsGroups()
    {
        return $this->transitionsGroups;
    }

    /**
     * @return ArrayOfTransitionsType
     */
    public function getTransitions()
    {
        return $this->transitions;
    }
}
