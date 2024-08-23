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
 * @method RuleActionsType addForwardAsAttachmentToRecipients(EmailAddressType $forwardAsAttachmentToRecipients)
 * @method RuleActionsType addForwardToRecipients(EmailAddressType $forwardToRecipients)
 * @method RuleActionsType addRedirectToRecipients(EmailAddressType $redirectToRecipients)
 * @method RuleActionsType addSendSMSAlertToRecipients(EmailAddressType $sendSMSAlertToRecipients)
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
     * @return boolean
     */
    public function getStopProcessingRules()
    {
        return $this->stopProcessingRules;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RuleActionsType
     */
    public function setAssignCategories(array $value)
    {
        $this->assignCategories = $this->castValueIfNeeded("assignCategories", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TargetFolderIdType
     * @return RuleActionsType
     */
    public function setCopyToFolder(TargetFolderIdType $value)
    {
        $this->copyToFolder = $this->castValueIfNeeded("copyToFolder", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isDelete()
    {
        return ((bool) $this->delete);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RuleActionsType
     */
    public function setDelete($value)
    {
        $this->delete = $this->castValueIfNeeded("delete", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return RuleActionsType
     */
    public function setForwardAsAttachmentToRecipients(array $value)
    {
        $this->forwardAsAttachmentToRecipients = $this->castValueIfNeeded("forwardAsAttachmentToRecipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return RuleActionsType
     */
    public function setForwardToRecipients(array $value)
    {
        $this->forwardToRecipients = $this->castValueIfNeeded("forwardToRecipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RuleActionsType
     */
    public function setMarkImportance($value)
    {
        $this->markImportance = $this->castValueIfNeeded("markImportance", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isMarkAsRead()
    {
        return ((bool) $this->markAsRead);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RuleActionsType
     */
    public function setMarkAsRead($value)
    {
        $this->markAsRead = $this->castValueIfNeeded("markAsRead", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TargetFolderIdType
     * @return RuleActionsType
     */
    public function setMoveToFolder(TargetFolderIdType $value)
    {
        $this->moveToFolder = $this->castValueIfNeeded("moveToFolder", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isPermanentDelete()
    {
        return ((bool) $this->permanentDelete);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RuleActionsType
     */
    public function setPermanentDelete($value)
    {
        $this->permanentDelete = $this->castValueIfNeeded("permanentDelete", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return RuleActionsType
     */
    public function setRedirectToRecipients(array $value)
    {
        $this->redirectToRecipients = $this->castValueIfNeeded("redirectToRecipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return RuleActionsType
     */
    public function setSendSMSAlertToRecipients(array $value)
    {
        $this->sendSMSAlertToRecipients = $this->castValueIfNeeded("sendSMSAlertToRecipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return RuleActionsType
     */
    public function setServerReplyWithMessage(ItemIdType $value)
    {
        $this->serverReplyWithMessage = $this->castValueIfNeeded("serverReplyWithMessage", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isStopProcessingRules()
    {
        return ((bool) $this->stopProcessingRules);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RuleActionsType
     */
    public function setStopProcessingRules($value)
    {
        $this->stopProcessingRules = $this->castValueIfNeeded("stopProcessingRules", $value);
        return $this;
    }
}
