<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateInboxRulesRequestType
 *
 *
 * XSD Type: UpdateInboxRulesRequestType
 *
 * @method UpdateInboxRulesRequestType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 * @method UpdateInboxRulesRequestType setRemoveOutlookRuleBlob(boolean $removeOutlookRuleBlob)
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
     * @return string
     */
    public function getMailboxSmtpAddress()
    {
        return $this->mailboxSmtpAddress;
    }

    /**
     * @returns bool
     */
    public function isRemoveOutlookRuleBlob()
    {
        return ((bool) $this->removeOutlookRuleBlob);
    }

    /**
     * @return boolean
     */
    public function getRemoveOutlookRuleBlob()
    {
        return $this->removeOutlookRuleBlob;
    }

    /**
     * @return \garethp\ews\API\Type\ArrayOfRuleOperationsType
     */
    public function getOperations()
    {
        return $this->operations;
    }
}
