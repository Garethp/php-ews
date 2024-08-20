<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method boolean getOutlookRuleBlobExists()
 * @method GetInboxRulesResponseType setOutlookRuleBlobExists(boolean $outlookRuleBlobExists)
 * @method GetInboxRulesResponseType addInboxRules(\garethp\ews\API\Type\RuleType $inboxRules)
 * @method \garethp\ews\API\Type\RuleType[] getInboxRules()
 * @method GetInboxRulesResponseType setInboxRules(array $inboxRules)
 */
class GetInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var boolean
     */
    protected $outlookRuleBlobExists = null;

    /**
     * @var \garethp\ews\API\Type\RuleType[]
     */
    protected $inboxRules = null;

    /**
     * @returns bool
     */
    public function isOutlookRuleBlobExists()
    {
        return ((bool) $this->outlookRuleBlobExists);
    }
}
