<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TimeZoneDefinitionType
 *
 *
 * XSD Type: TimeZoneDefinitionType
 *
 * @method TimeZoneDefinitionType addPeriods(PeriodType $periods)
 * @method TimeZoneDefinitionType addTransitionsGroups(ArrayOfTransitionsType $transitionsGroups)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TimeZoneDefinitionType
     */
    public function setId($value)
    {
        $this->id = $this->castValueIfNeeded("id", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TimeZoneDefinitionType
     */
    public function setName($value)
    {
        $this->name = $this->castValueIfNeeded("name", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PeriodType[]
     * @return TimeZoneDefinitionType
     */
    public function setPeriods(array $value)
    {
        $this->periods = $this->castValueIfNeeded("periods", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ArrayOfTransitionsType[]
     * @return TimeZoneDefinitionType
     */
    public function setTransitionsGroups(array $value)
    {
        $this->transitionsGroups = $this->castValueIfNeeded("transitionsGroups", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ArrayOfTransitionsType
     * @return TimeZoneDefinitionType
     */
    public function setTransitions(ArrayOfTransitionsType $value)
    {
        $this->transitions = $this->castValueIfNeeded("transitions", $value);
        return $this;
    }
}
