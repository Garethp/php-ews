<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CreateRuleOperationType
 *
 *
 * XSD Type: CreateRuleOperationType
 *
 * @method CreateRuleOperationType setRule(RuleType $rule)
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
}
