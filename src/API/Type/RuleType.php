<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RuleType
 *
 * Rule type
 * XSD Type: RuleType
 */
class RuleType extends Type
{

    /**
     * @var string
     */
    protected $ruleId = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var integer
     */
    protected $priority = null;

    /**
     * @var boolean
     */
    protected $isEnabled = null;

    /**
     * @var boolean
     */
    protected $isNotSupported = null;

    /**
     * @var boolean
     */
    protected $isInError = null;

    /**
     * @var \garethp\ews\API\Type\RulePredicatesType
     */
    protected $conditions = null;

    /**
     * @var \garethp\ews\API\Type\RulePredicatesType
     */
    protected $exceptions = null;

    /**
     * @var \garethp\ews\API\Type\RuleActionsType
     */
    protected $actions = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RuleType
     */
    public function setRuleId($value)
    {
        $this->ruleId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RuleType
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return RuleType
     */
    public function setPriority($value)
    {
        $this->priority = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isEnabled()
    {
        return ((bool) $this->isEnabled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RuleType
     */
    public function setIsEnabled($value)
    {
        $this->isEnabled = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isNotSupported()
    {
        return ((bool) $this->isNotSupported);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsNotSupported()
    {
        return $this->isNotSupported;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RuleType
     */
    public function setIsNotSupported($value)
    {
        $this->isNotSupported = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isInError()
    {
        return ((bool) $this->isInError);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsInError()
    {
        return $this->isInError;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RuleType
     */
    public function setIsInError($value)
    {
        $this->isInError = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RulePredicatesType
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RulePredicatesType
     * @return RuleType
     */
    public function setConditions(RulePredicatesType $value)
    {
        $this->conditions = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RulePredicatesType
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RulePredicatesType
     * @return RuleType
     */
    public function setExceptions(RulePredicatesType $value)
    {
        $this->exceptions = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RuleActionsType
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RuleActionsType
     * @return RuleType
     */
    public function setActions(RuleActionsType $value)
    {
        $this->actions = $value;
        return $this;
    }
}
