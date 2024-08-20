<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method GetInboxRulesResponseType setOutlookRuleBlobExists(boolean $outlookRuleBlobExists)
 * @method GetInboxRulesResponseType addInboxRules(\garethp\ews\API\Type\RuleType $inboxRules)
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

    /**
     * @return boolean
     */
    public function getOutlookRuleBlobExists()
    {
        return $this->outlookRuleBlobExists;
    }

    /**
     * @return \garethp\ews\API\Type\RuleType[]
     */
    public function getInboxRules()
    {
        return $this->inboxRules;
    }
}
