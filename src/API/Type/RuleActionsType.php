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
 * @method RuleActionsType setAssignCategories(array $assignCategories)
 * @method RuleActionsType setCopyToFolder(TargetFolderIdType $copyToFolder)
 * @method RuleActionsType setDelete(boolean $delete)
 * @method RuleActionsType addForwardAsAttachmentToRecipients(EmailAddressType $forwardAsAttachmentToRecipients)
 * @method RuleActionsType setForwardAsAttachmentToRecipients(array $forwardAsAttachmentToRecipients)
 * @method RuleActionsType addForwardToRecipients(EmailAddressType $forwardToRecipients)
 * @method RuleActionsType setForwardToRecipients(array $forwardToRecipients)
 * @method RuleActionsType setMarkImportance(string $markImportance)
 * @method RuleActionsType setMarkAsRead(boolean $markAsRead)
 * @method RuleActionsType setMoveToFolder(TargetFolderIdType $moveToFolder)
 * @method RuleActionsType setPermanentDelete(boolean $permanentDelete)
 * @method RuleActionsType addRedirectToRecipients(EmailAddressType $redirectToRecipients)
 * @method RuleActionsType setRedirectToRecipients(array $redirectToRecipients)
 * @method RuleActionsType addSendSMSAlertToRecipients(EmailAddressType $sendSMSAlertToRecipients)
 * @method RuleActionsType setSendSMSAlertToRecipients(array $sendSMSAlertToRecipients)
 * @method RuleActionsType setServerReplyWithMessage(ItemIdType $serverReplyWithMessage)
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
     * @return string[]
     */
    public function getAssignCategories()
    {
        return $this->assignCategories;
    }

    /**
     * @return TargetFolderIdType
     */
    public function getCopyToFolder()
    {
        return $this->copyToFolder;
    }

    /**
     * @returns bool
     */
    public function isDelete()
    {
        return ((bool) $this->delete);
    }

    /**
     * @return boolean
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getForwardAsAttachmentToRecipients()
    {
        return $this->forwardAsAttachmentToRecipients;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getForwardToRecipients()
    {
        return $this->forwardToRecipients;
    }

    /**
     * @return string
     */
    public function getMarkImportance()
    {
        return $this->markImportance;
    }

    /**
     * @returns bool
     */
    public function isMarkAsRead()
    {
        return ((bool) $this->markAsRead);
    }

    /**
     * @return boolean
     */
    public function getMarkAsRead()
    {
        return $this->markAsRead;
    }

    /**
     * @return TargetFolderIdType
     */
    public function getMoveToFolder()
    {
        return $this->moveToFolder;
    }

    /**
     * @returns bool
     */
    public function isPermanentDelete()
    {
        return ((bool) $this->permanentDelete);
    }

    /**
     * @return boolean
     */
    public function getPermanentDelete()
    {
        return $this->permanentDelete;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getRedirectToRecipients()
    {
        return $this->redirectToRecipients;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getSendSMSAlertToRecipients()
    {
        return $this->sendSMSAlertToRecipients;
    }

    /**
     * @return ItemIdType
     */
    public function getServerReplyWithMessage()
    {
        return $this->serverReplyWithMessage;
    }

    /**
     * @returns bool
     */
    public function isStopProcessingRules()
    {
        return ((bool) $this->stopProcessingRules);
    }

    /**
     * @return boolean
     */
    public function getStopProcessingRules()
    {
        return $this->stopProcessingRules;
    }
}
