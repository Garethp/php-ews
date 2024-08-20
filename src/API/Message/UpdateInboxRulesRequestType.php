<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateInboxRulesRequestType
 *
 *
 * XSD Type: UpdateInboxRulesRequestType
 *
 * @method string getMailboxSmtpAddress()
 * @method UpdateInboxRulesRequestType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 * @method boolean getRemoveOutlookRuleBlob()
 * @method UpdateInboxRulesRequestType setRemoveOutlookRuleBlob(boolean $removeOutlookRuleBlob)
 * @method \garethp\ews\API\Type\ArrayOfRuleOperationsType getOperations()
 * @method UpdateInboxRulesRequestType setOperations(\garethp\ews\API\Type\ArrayOfRuleOperationsType $operations)
 */
class UpdateInboxRulesRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $mailboxSmtpAddress = null;

    /**
     * @var boolean
     */
    protected $removeOutlookRuleBlob = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfRuleOperationsType
     */
    protected $operations = null;

    /**
     * @returns bool
     */
    public function isRemoveOutlookRuleBlob()
    {
        return ((bool) $this->removeOutlookRuleBlob);
    }
}
