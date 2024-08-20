<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RuleActionsType
 *
 * Rule actions
 * XSD Type: RuleActionsType
 *
 * @method RuleActionsType addAssignCategories(string $assignCategories)
 * @method string[] getAssignCategories()
 * @method RuleActionsType setAssignCategories(array $assignCategories)
 * @method TargetFolderIdType getCopyToFolder()
 * @method RuleActionsType setCopyToFolder(TargetFolderIdType $copyToFolder)
 * @method boolean getDelete()
 * @method RuleActionsType setDelete(boolean $delete)
 * @method RuleActionsType addForwardAsAttachmentToRecipients(EmailAddressType $forwardAsAttachmentToRecipients)
 * @method EmailAddressType[] getForwardAsAttachmentToRecipients()
 * @method RuleActionsType setForwardAsAttachmentToRecipients(array $forwardAsAttachmentToRecipients)
 * @method RuleActionsType addForwardToRecipients(EmailAddressType $forwardToRecipients)
 * @method EmailAddressType[] getForwardToRecipients()
 * @method RuleActionsType setForwardToRecipients(array $forwardToRecipients)
 * @method string getMarkImportance()
 * @method RuleActionsType setMarkImportance(string $markImportance)
 * @method boolean getMarkAsRead()
 * @method RuleActionsType setMarkAsRead(boolean $markAsRead)
 * @method TargetFolderIdType getMoveToFolder()
 * @method RuleActionsType setMoveToFolder(TargetFolderIdType $moveToFolder)
 * @method boolean getPermanentDelete()
 * @method RuleActionsType setPermanentDelete(boolean $permanentDelete)
 * @method RuleActionsType addRedirectToRecipients(EmailAddressType $redirectToRecipients)
 * @method EmailAddressType[] getRedirectToRecipients()
 * @method RuleActionsType setRedirectToRecipients(array $redirectToRecipients)
 * @method RuleActionsType addSendSMSAlertToRecipients(EmailAddressType $sendSMSAlertToRecipients)
 * @method EmailAddressType[] getSendSMSAlertToRecipients()
 * @method RuleActionsType setSendSMSAlertToRecipients(array $sendSMSAlertToRecipients)
 * @method ItemIdType getServerReplyWithMessage()
 * @method RuleActionsType setServerReplyWithMessage(ItemIdType $serverReplyWithMessage)
 * @method boolean getStopProcessingRules()
 * @method RuleActionsType setStopProcessingRules(boolean $stopProcessingRules)
 */
class RuleActionsType extends Type
{

    /**
     * @var string[]
     */
    protected $assignCategories = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $copyToFolder = null;

    /**
     * @var boolean
     */
    protected $delete = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $forwardAsAttachmentToRecipients = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $forwardToRecipients = null;

    /**
     * @var string
     */
    protected $markImportance = null;

    /**
     * @var boolean
     */
    protected $markAsRead = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $moveToFolder = null;

    /**
     * @var boolean
     */
    protected $permanentDelete = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $redirectToRecipients = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $sendSMSAlertToRecipients = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $serverReplyWithMessage = null;

    /**
     * @var boolean
     */
    protected $stopProcessingRules = null;

    /**
     * @returns bool
     */
    public function isDelete()
    {
        return ((bool) $this->delete);
    }

    /**
     * @returns bool
     */
    public function isMarkAsRead()
    {
        return ((bool) $this->markAsRead);
    }

    /**
     * @returns bool
     */
    public function isPermanentDelete()
    {
        return ((bool) $this->permanentDelete);
    }

    /**
     * @returns bool
     */
    public function isStopProcessingRules()
    {
        return ((bool) $this->stopProcessingRules);
    }
}
