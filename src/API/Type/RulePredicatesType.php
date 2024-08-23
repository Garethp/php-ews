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
 * @method RulePredicatesType addContainsBodyStrings(string $containsBodyStrings)
 * @method RulePredicatesType addContainsHeaderStrings(string $containsHeaderStrings)
 * @method RulePredicatesType addContainsRecipientStrings(string $containsRecipientStrings)
 * @method RulePredicatesType addContainsSenderStrings(string $containsSenderStrings)
 * @method RulePredicatesType addContainsSubjectOrBodyStrings(string $containsSubjectOrBodyStrings)
 * @method RulePredicatesType addContainsSubjectStrings(string $containsSubjectStrings)
 * @method RulePredicatesType addFromAddresses(EmailAddressType $fromAddresses)
 * @method RulePredicatesType addFromConnectedAccounts(string $fromConnectedAccounts)
 * @method RulePredicatesType addItemClasses(string $itemClasses)
 * @method RulePredicatesType addMessageClassifications(string $messageClassifications)
 * @method RulePredicatesType addSentToAddresses(EmailAddressType $sentToAddresses)
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
     * @return boolean
     */
    public function getIsApprovalRequest()
    {
        return $this->isApprovalRequest;
    }

    /**
     * @return boolean
     */
    public function getIsAutomaticForward()
    {
        return $this->isAutomaticForward;
    }

    /**
     * @return boolean
     */
    public function getIsAutomaticReply()
    {
        return $this->isAutomaticReply;
    }

    /**
     * @return boolean
     */
    public function getIsEncrypted()
    {
        return $this->isEncrypted;
    }

    /**
     * @return boolean
     */
    public function getIsMeetingRequest()
    {
        return $this->isMeetingRequest;
    }

    /**
     * @return boolean
     */
    public function getIsMeetingResponse()
    {
        return $this->isMeetingResponse;
    }

    /**
     * @return boolean
     */
    public function getIsNDR()
    {
        return $this->isNDR;
    }

    /**
     * @return boolean
     */
    public function getIsPermissionControlled()
    {
        return $this->isPermissionControlled;
    }

    /**
     * @return boolean
     */
    public function getIsReadReceipt()
    {
        return $this->isReadReceipt;
    }

    /**
     * @return boolean
     */
    public function getIsSigned()
    {
        return $this->isSigned;
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
     * @return boolean
     */
    public function getNotSentToMe()
    {
        return $this->notSentToMe;
    }

    /**
     * @return boolean
     */
    public function getSentCcMe()
    {
        return $this->sentCcMe;
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
     * @return boolean
     */
    public function getSentToMe()
    {
        return $this->sentToMe;
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setCategories(array $value)
    {
        $this->categories = $this->castValueIfNeeded("categories", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setContainsBodyStrings(array $value)
    {
        $this->containsBodyStrings = $this->castValueIfNeeded("containsBodyStrings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setContainsHeaderStrings(array $value)
    {
        $this->containsHeaderStrings = $this->castValueIfNeeded("containsHeaderStrings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setContainsRecipientStrings(array $value)
    {
        $this->containsRecipientStrings = $this->castValueIfNeeded("containsRecipientStrings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setContainsSenderStrings(array $value)
    {
        $this->containsSenderStrings = $this->castValueIfNeeded("containsSenderStrings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setContainsSubjectOrBodyStrings(array $value)
    {
        $this->containsSubjectOrBodyStrings = $this->castValueIfNeeded("containsSubjectOrBodyStrings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setContainsSubjectStrings(array $value)
    {
        $this->containsSubjectStrings = $this->castValueIfNeeded("containsSubjectStrings", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RulePredicatesType
     */
    public function setFlaggedForAction($value)
    {
        $this->flaggedForAction = $this->castValueIfNeeded("flaggedForAction", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return RulePredicatesType
     */
    public function setFromAddresses(array $value)
    {
        $this->fromAddresses = $this->castValueIfNeeded("fromAddresses", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setFromConnectedAccounts(array $value)
    {
        $this->fromConnectedAccounts = $this->castValueIfNeeded("fromConnectedAccounts", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isHasAttachments()
    {
        return ((bool) $this->hasAttachments);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setHasAttachments($value)
    {
        $this->hasAttachments = $this->castValueIfNeeded("hasAttachments", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RulePredicatesType
     */
    public function setImportance($value)
    {
        $this->importance = $this->castValueIfNeeded("importance", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isApprovalRequest()
    {
        return ((bool) $this->isApprovalRequest);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsApprovalRequest($value)
    {
        $this->isApprovalRequest = $this->castValueIfNeeded("isApprovalRequest", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isAutomaticForward()
    {
        return ((bool) $this->isAutomaticForward);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsAutomaticForward($value)
    {
        $this->isAutomaticForward = $this->castValueIfNeeded("isAutomaticForward", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isAutomaticReply()
    {
        return ((bool) $this->isAutomaticReply);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsAutomaticReply($value)
    {
        $this->isAutomaticReply = $this->castValueIfNeeded("isAutomaticReply", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isEncrypted()
    {
        return ((bool) $this->isEncrypted);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsEncrypted($value)
    {
        $this->isEncrypted = $this->castValueIfNeeded("isEncrypted", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isMeetingRequest()
    {
        return ((bool) $this->isMeetingRequest);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsMeetingRequest($value)
    {
        $this->isMeetingRequest = $this->castValueIfNeeded("isMeetingRequest", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isMeetingResponse()
    {
        return ((bool) $this->isMeetingResponse);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsMeetingResponse($value)
    {
        $this->isMeetingResponse = $this->castValueIfNeeded("isMeetingResponse", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isNDR()
    {
        return ((bool) $this->isNDR);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsNDR($value)
    {
        $this->isNDR = $this->castValueIfNeeded("isNDR", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isPermissionControlled()
    {
        return ((bool) $this->isPermissionControlled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsPermissionControlled($value)
    {
        $this->isPermissionControlled = $this->castValueIfNeeded("isPermissionControlled", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isReadReceipt()
    {
        return ((bool) $this->isReadReceipt);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsReadReceipt($value)
    {
        $this->isReadReceipt = $this->castValueIfNeeded("isReadReceipt", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isSigned()
    {
        return ((bool) $this->isSigned);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsSigned($value)
    {
        $this->isSigned = $this->castValueIfNeeded("isSigned", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isVoicemail()
    {
        return ((bool) $this->isVoicemail);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setIsVoicemail($value)
    {
        $this->isVoicemail = $this->castValueIfNeeded("isVoicemail", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setItemClasses(array $value)
    {
        $this->itemClasses = $this->castValueIfNeeded("itemClasses", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return RulePredicatesType
     */
    public function setMessageClassifications(array $value)
    {
        $this->messageClassifications = $this->castValueIfNeeded("messageClassifications", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isNotSentToMe()
    {
        return ((bool) $this->notSentToMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setNotSentToMe($value)
    {
        $this->notSentToMe = $this->castValueIfNeeded("notSentToMe", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isSentCcMe()
    {
        return ((bool) $this->sentCcMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setSentCcMe($value)
    {
        $this->sentCcMe = $this->castValueIfNeeded("sentCcMe", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isSentOnlyToMe()
    {
        return ((bool) $this->sentOnlyToMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setSentOnlyToMe($value)
    {
        $this->sentOnlyToMe = $this->castValueIfNeeded("sentOnlyToMe", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return RulePredicatesType
     */
    public function setSentToAddresses(array $value)
    {
        $this->sentToAddresses = $this->castValueIfNeeded("sentToAddresses", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isSentToMe()
    {
        return ((bool) $this->sentToMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setSentToMe($value)
    {
        $this->sentToMe = $this->castValueIfNeeded("sentToMe", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isSentToOrCcMe()
    {
        return ((bool) $this->sentToOrCcMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return RulePredicatesType
     */
    public function setSentToOrCcMe($value)
    {
        $this->sentToOrCcMe = $this->castValueIfNeeded("sentToOrCcMe", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return RulePredicatesType
     */
    public function setSensitivity($value)
    {
        $this->sensitivity = $this->castValueIfNeeded("sensitivity", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RulePredicateDateRangeType
     * @return RulePredicatesType
     */
    public function setWithinDateRange(RulePredicateDateRangeType $value)
    {
        $this->withinDateRange = $this->castValueIfNeeded("withinDateRange", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RulePredicateSizeRangeType
     * @return RulePredicatesType
     */
    public function setWithinSizeRange(RulePredicateSizeRangeType $value)
    {
        $this->withinSizeRange = $this->castValueIfNeeded("withinSizeRange", $value);
        return $this;
    }
}
