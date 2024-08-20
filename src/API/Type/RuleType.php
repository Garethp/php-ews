<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RuleType
 *
 * Rule type
 * XSD Type: RuleType
 *
 * @method RuleType setRuleId(string $ruleId)
 * @method RuleType setDisplayName(string $displayName)
 * @method RuleType setPriority(integer $priority)
 * @method RuleType setIsEnabled(boolean $isEnabled)
 * @method RuleType setIsNotSupported(boolean $isNotSupported)
 * @method RuleType setIsInError(boolean $isInError)
 * @method RuleType setConditions(RulePredicatesType $conditions)
 * @method RuleType setExceptions(RulePredicatesType $exceptions)
 * @method RuleType setActions(RuleActionsType $actions)
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
     * @return string
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @returns bool
     */
    public function isEnabled()
    {
        return ((bool) $this->isEnabled);
    }

    /**
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @returns bool
     */
    public function isNotSupported()
    {
        return ((bool) $this->isNotSupported);
    }

    /**
     * @return boolean
     */
    public function getIsNotSupported()
    {
        return $this->isNotSupported;
    }

    /**
     * @returns bool
     */
    public function isInError()
    {
        return ((bool) $this->isInError);
    }

    /**
     * @return boolean
     */
    public function getIsInError()
    {
        return $this->isInError;
    }

    /**
     * @return RulePredicatesType
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @return RulePredicatesType
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    /**
     * @return RuleActionsType
     */
    public function getActions()
    {
        return $this->actions;
    }
}
