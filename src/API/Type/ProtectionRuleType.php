<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ProtectionRuleType
 *
 *
 * XSD Type: ProtectionRuleType
 *
 * @method ProtectionRuleType setName(string $name)
 * @method ProtectionRuleType setUserOverridable(boolean $userOverridable)
 * @method ProtectionRuleType setPriority(integer $priority)
 * @method ProtectionRuleType setCondition(ProtectionRuleConditionType $condition)
 * @method ProtectionRuleType setAction(ProtectionRuleActionType $action)
 */
class ProtectionRuleType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $userOverridable = null;

    /**
     * @var integer
     */
    protected $priority = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRuleConditionType
     */
    protected $condition = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRuleActionType
     */
    protected $action = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @returns bool
     */
    public function isUserOverridable()
    {
        return ((bool) $this->userOverridable);
    }

    /**
     * @return boolean
     */
    public function getUserOverridable()
    {
        return $this->userOverridable;
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @return ProtectionRuleConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return ProtectionRuleActionType
     */
    public function getAction()
    {
        return $this->action;
    }
}
