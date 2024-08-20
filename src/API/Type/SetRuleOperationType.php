<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SetRuleOperationType
 *
 *
 * XSD Type: SetRuleOperationType
 *
 * @method SetRuleOperationType setRule(RuleType $rule)
 */
class SetRuleOperationType extends RuleOperationType
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
