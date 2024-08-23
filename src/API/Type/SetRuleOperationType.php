<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SetRuleOperationType
 *
 *
 * XSD Type: SetRuleOperationType
 */
class SetRuleOperationType extends RuleOperationType
{

    /**
     * @var \garethp\ews\API\Type\RuleType
     */
    protected $rule = null;

    /**
     * @autogenerated This method is safe to replace
     * @return RuleType
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RuleType
     * @return SetRuleOperationType
     */
    public function setRule(RuleType $value)
    {
        $this->rule = $this->castValueIfNeeded("rule", $value);
        return $this;
    }
}
