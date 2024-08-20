<?php

namespace garethp\ews\API\Type;

/**
 * Class representing DeleteRuleOperationType
 *
 *
 * XSD Type: DeleteRuleOperationType
 *
 * @method DeleteRuleOperationType setRuleId(string $ruleId)
 */
class DeleteRuleOperationType extends RuleOperationType
{

    /**
     * @var string
     */
    protected $ruleId = null;

    /**
     * @return string
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }
}
