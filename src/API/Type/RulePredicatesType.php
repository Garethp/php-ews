<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RulePredicatesType
 *
 * Rule predicates, used as rule conditions or exceptions
 * XSD Type: RulePredicatesType
 *
 * @method RulePredicatesType addCategories(string $categories)
 * @method RulePredicatesType setCategories(array $categories)
 * @method RulePredicatesType addContainsBodyStrings(string $containsBodyStrings)
 * @method RulePredicatesType setContainsBodyStrings(array $containsBodyStrings)
 * @method RulePredicatesType addContainsHeaderStrings(string $containsHeaderStrings)
 * @method RulePredicatesType setContainsHeaderStrings(array $containsHeaderStrings)
 * @method RulePredicatesType addContainsRecipientStrings(string $containsRecipientStrings)
 * @method RulePredicatesType setContainsRecipientStrings(array $containsRecipientStrings)
 * @method RulePredicatesType addContainsSenderStrings(string $containsSenderStrings)
 * @method RulePredicatesType setContainsSenderStrings(array $containsSenderStrings)
 * @method RulePredicatesType addContainsSubjectOrBodyStrings(string $containsSubjectOrBodyStrings)
 * @method RulePredicatesType setContainsSubjectOrBodyStrings(array $containsSubjectOrBodyStrings)
 * @method RulePredicatesType addContainsSubjectStrings(string $containsSubjectStrings)
 * @method RulePredicatesType setContainsSubjectStrings(array $containsSubjectStrings)
 * @method RulePredicatesType setFlaggedForAction(string $flaggedForAction)
 * @method RulePredicatesType addFromAddresses(EmailAddressType $fromAddresses)
 * @method RulePredicatesType setFromAddresses(array $fromAddresses)
 * @method RulePredicatesType addFromConnectedAccounts(string $fromConnectedAccounts)
 * @method RulePredicatesType setFromConnectedAccounts(array $fromConnectedAccounts)
 * @method RulePredicatesType setHasAttachments(boolean $hasAttachments)
 * @method RulePredicatesType setImportance(string $importance)
 * @method RulePredicatesType setIsApprovalRequest(boolean $isApprovalRequest)
 * @method RulePredicatesType setIsAutomaticForward(boolean $isAutomaticForward)
 * @method RulePredicatesType setIsAutomaticReply(boolean $isAutomaticReply)
 * @method RulePredicatesType setIsEncrypted(boolean $isEncrypted)
 * @method RulePredicatesType setIsMeetingRequest(boolean $isMeetingRequest)
 * @method RulePredicatesType setIsMeetingResponse(boolean $isMeetingResponse)
 * @method RulePredicatesType setIsNDR(boolean $isNDR)
 * @method RulePredicatesType setIsPermissionControlled(boolean $isPermissionControlled)
 * @method RulePredicatesType setIsReadReceipt(boolean $isReadReceipt)
 * @method RulePredicatesType setIsSigned(boolean $isSigned)
 * @method RulePredicatesType setIsVoicemail(boolean $isVoicemail)
 * @method RulePredicatesType addItemClasses(string $itemClasses)
 * @method RulePredicatesType setItemClasses(array $itemClasses)
 * @method RulePredicatesType addMessageClassifications(string $messageClassifications)
 * @method RulePredicatesType setMessageClassifications(array $messageClassifications)
 * @method RulePredicatesType setNotSentToMe(boolean $notSentToMe)
 * @method RulePredicatesType setSentCcMe(boolean $sentCcMe)
 * @method RulePredicatesType setSentOnlyToMe(boolean $sentOnlyToMe)
 * @method RulePredicatesType addSentToAddresses(EmailAddressType $sentToAddresses)
 * @method RulePredicatesType setSentToAddresses(array $sentToAddresses)
 * @method RulePredicatesType setSentToMe(boolean $sentToMe)
 * @method RulePredicatesType setSentToOrCcMe(boolean $sentToOrCcMe)
 * @method RulePredicatesType setSensitivity(string $sensitivity)
 * @method RulePredicatesType setWithinDateRange(RulePredicateDateRangeType $withinDateRange)
 * @method RulePredicatesType setWithinSizeRange(RulePredicateSizeRangeType $withinSizeRange)
 */
class RulePredicatesType extends Type
{

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var string[]
     */
    protected $containsBodyStrings = null;

    /**
     * @var string[]
     */
    protected $containsHeaderStrings = null;

    /**
     * @var string[]
     */
    protected $containsRecipientStrings = null;

    /**
     * @var string[]
     */
    protected $containsSenderStrings = null;

    /**
     * @var string[]
     */
    protected $containsSubjectOrBodyStrings = null;

    /**
     * @var string[]
     */
    protected $containsSubjectStrings = null;

    /**
     * @var string
     */
    protected $flaggedForAction = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $fromAddresses = null;

    /**
     * @var string[]
     */
    protected $fromConnectedAccounts = null;

    /**
     * @var boolean
     */
    protected $hasAttachments = null;

    /**
     * @var string
     */
    protected $importance = null;

    /**
     * @var boolean
     */
    protected $isApprovalRequest = null;

    /**
     * @var boolean
     */
    protected $isAutomaticForward = null;

    /**
     * @var boolean
     */
    protected $isAutomaticReply = null;

    /**
     * @var boolean
     */
    protected $isEncrypted = null;

    /**
     * @var boolean
     */
    protected $isMeetingRequest = null;

    /**
     * @var boolean
     */
    protected $isMeetingResponse = null;

    /**
     * @var boolean
     */
    protected $isNDR = null;

    /**
     * @var boolean
     */
    protected $isPermissionControlled = null;

    /**
     * @var boolean
     */
    protected $isReadReceipt = null;

    /**
     * @var boolean
     */
    protected $isSigned = null;

    /**
     * @var boolean
     */
    protected $isVoicemail = null;

    /**
     * @var string[]
     */
    protected $itemClasses = null;

    /**
     * @var string[]
     */
    protected $messageClassifications = null;

    /**
     * @var boolean
     */
    protected $notSentToMe = null;

    /**
     * @var boolean
     */
    protected $sentCcMe = null;

    /**
     * @var boolean
     */
    protected $sentOnlyToMe = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $sentToAddresses = null;

    /**
     * @var boolean
     */
    protected $sentToMe = null;

    /**
     * @var boolean
     */
    protected $sentToOrCcMe = null;

    /**
     * @var string
     */
    protected $sensitivity = null;

    /**
     * @var \garethp\ews\API\Type\RulePredicateDateRangeType
     */
    protected $withinDateRange = null;

    /**
     * @var \garethp\ews\API\Type\RulePredicateSizeRangeType
     */
    protected $withinSizeRange = null;

    /**
     * @return string[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return string[]
     */
    public function getContainsBodyStrings()
    {
        return $this->containsBodyStrings;
    }

    /**
     * @return string[]
     */
    public function getContainsHeaderStrings()
    {
        return $this->containsHeaderStrings;
    }

    /**
     * @return string[]
     */
    public function getContainsRecipientStrings()
    {
        return $this->containsRecipientStrings;
    }

    /**
     * @return string[]
     */
    public function getContainsSenderStrings()
    {
        return $this->containsSenderStrings;
    }

    /**
     * @return string[]
     */
    public function getContainsSubjectOrBodyStrings()
    {
        return $this->containsSubjectOrBodyStrings;
    }

    /**
     * @return string[]
     */
    public function getContainsSubjectStrings()
    {
        return $this->containsSubjectStrings;
    }

    /**
     * @return string
     */
    public function getFlaggedForAction()
    {
        return $this->flaggedForAction;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getFromAddresses()
    {
        return $this->fromAddresses;
    }

    /**
     * @return string[]
     */
    public function getFromConnectedAccounts()
    {
        return $this->fromConnectedAccounts;
    }

    /**
     * @returns bool
     */
    public function isHasAttachments()
    {
        return ((bool) $this->hasAttachments);
    }

    /**
     * @return boolean
     */
    public function getHasAttachments()
    {
        return $this->hasAttachments;
    }

    /**
     * @return string
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @returns bool
     */
    public function isApprovalRequest()
    {
        return ((bool) $this->isApprovalRequest);
    }

    /**
     * @return boolean
     */
    public function getIsApprovalRequest()
    {
        return $this->isApprovalRequest;
    }

    /**
     * @returns bool
     */
    public function isAutomaticForward()
    {
        return ((bool) $this->isAutomaticForward);
    }

    /**
     * @return boolean
     */
    public function getIsAutomaticForward()
    {
        return $this->isAutomaticForward;
    }

    /**
     * @returns bool
     */
    public function isAutomaticReply()
    {
        return ((bool) $this->isAutomaticReply);
    }

    /**
     * @return boolean
     */
    public function getIsAutomaticReply()
    {
        return $this->isAutomaticReply;
    }

    /**
     * @returns bool
     */
    public function isEncrypted()
    {
        return ((bool) $this->isEncrypted);
    }

    /**
     * @return boolean
     */
    public function getIsEncrypted()
    {
        return $this->isEncrypted;
    }

    /**
     * @returns bool
     */
    public function isMeetingRequest()
    {
        return ((bool) $this->isMeetingRequest);
    }

    /**
     * @return boolean
     */
    public function getIsMeetingRequest()
    {
        return $this->isMeetingRequest;
    }

    /**
     * @returns bool
     */
    public function isMeetingResponse()
    {
        return ((bool) $this->isMeetingResponse);
    }

    /**
     * @return boolean
     */
    public function getIsMeetingResponse()
    {
        return $this->isMeetingResponse;
    }

    /**
     * @returns bool
     */
    public function isNDR()
    {
        return ((bool) $this->isNDR);
    }

    /**
     * @return boolean
     */
    public function getIsNDR()
    {
        return $this->isNDR;
    }

    /**
     * @returns bool
     */
    public function isPermissionControlled()
    {
        return ((bool) $this->isPermissionControlled);
    }

    /**
     * @return boolean
     */
    public function getIsPermissionControlled()
    {
        return $this->isPermissionControlled;
    }

    /**
     * @returns bool
     */
    public function isReadReceipt()
    {
        return ((bool) $this->isReadReceipt);
    }

    /**
     * @return boolean
     */
    public function getIsReadReceipt()
    {
        return $this->isReadReceipt;
    }

    /**
     * @returns bool
     */
    public function isSigned()
    {
        return ((bool) $this->isSigned);
    }

    /**
     * @return boolean
     */
    public function getIsSigned()
    {
        return $this->isSigned;
    }

    /**
     * @returns bool
     */
    public function isVoicemail()
    {
        return ((bool) $this->isVoicemail);
    }

    /**
     * @return boolean
     */
    public function getIsVoicemail()
    {
        return $this->isVoicemail;
    }

    /**
     * @return string[]
     */
    public function getItemClasses()
    {
        return $this->itemClasses;
    }

    /**
     * @return string[]
     */
    public function getMessageClassifications()
    {
        return $this->messageClassifications;
    }

    /**
     * @returns bool
     */
    public function isNotSentToMe()
    {
        return ((bool) $this->notSentToMe);
    }

    /**
     * @return boolean
     */
    public function getNotSentToMe()
    {
        return $this->notSentToMe;
    }

    /**
     * @returns bool
     */
    public function isSentCcMe()
    {
        return ((bool) $this->sentCcMe);
    }

    /**
     * @return boolean
     */
    public function getSentCcMe()
    {
        return $this->sentCcMe;
    }

    /**
     * @returns bool
     */
    public function isSentOnlyToMe()
    {
        return ((bool) $this->sentOnlyToMe);
    }

    /**
     * @return boolean
     */
    public function getSentOnlyToMe()
    {
        return $this->sentOnlyToMe;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getSentToAddresses()
    {
        return $this->sentToAddresses;
    }

    /**
     * @returns bool
     */
    public function isSentToMe()
    {
        return ((bool) $this->sentToMe);
    }

    /**
     * @return boolean
     */
    public function getSentToMe()
    {
        return $this->sentToMe;
    }

    /**
     * @returns bool
     */
    public function isSentToOrCcMe()
    {
        return ((bool) $this->sentToOrCcMe);
    }

    /**
     * @return boolean
     */
    public function getSentToOrCcMe()
    {
        return $this->sentToOrCcMe;
    }

    /**
     * @return string
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * @return RulePredicateDateRangeType
     */
    public function getWithinDateRange()
    {
        return $this->withinDateRange;
    }

    /**
     * @return RulePredicateSizeRangeType
     */
    public function getWithinSizeRange()
    {
        return $this->withinSizeRange;
    }
}
