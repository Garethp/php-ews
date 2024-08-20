<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateInboxRulesResponseType
 *
 *
 * XSD Type: UpdateInboxRulesResponseType
 *
 * @method UpdateInboxRulesResponseType addRuleOperationErrors(\garethp\ews\API\Type\RuleOperationErrorType $ruleOperationErrors)
 * @method UpdateInboxRulesResponseType setRuleOperationErrors(array $ruleOperationErrors)
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\RuleOperationErrorType[]
     */
    protected $ruleOperationErrors = null;

    /**
     * @return \garethp\ews\API\Type\RuleOperationErrorType[]
     */
    public function getRuleOperationErrors()
    {
        return $this->ruleOperationErrors;
    }
}
