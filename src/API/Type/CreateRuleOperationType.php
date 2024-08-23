<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CreateRuleOperationType
 *
 *
 * XSD Type: CreateRuleOperationType
 */
class CreateRuleOperationType extends RuleOperationType
{

    /**
     * @var \garethp\ews\API\Type\RuleType
     */
    protected $rule = null;

    /**
     * @return RuleType
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RuleType
     * @return CreateRuleOperationType
     */
    public function setRule(RuleType $value)
    {
        $this->rule = $this->castValueIfNeeded("rule", $value);
        return $this;
    }
}
