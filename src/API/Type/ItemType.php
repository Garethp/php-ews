<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ItemType
 *
 *
 * XSD Type: ItemType
 */
class ItemType extends Type
{

    /**
     * @var \garethp\ews\API\Type\MimeContentType
     */
    protected $mimeContent = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var string
     */
    protected $itemClass = null;

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var string
     */
    protected $sensitivity = null;

    /**
     * @var \garethp\ews\API\Type\BodyType
     */
    protected $body = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfAttachmentsType
     */
    protected $attachments = null;

    /**
     * @var \DateTime
     */
    protected $dateTimeReceived = null;

    /**
     * @var integer
     */
    protected $size = null;

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var string
     */
    protected $importance = null;

    /**
     * @var string
     */
    protected $inReplyTo = null;

    /**
     * @var boolean
     */
    protected $isSubmitted = null;

    /**
     * @var boolean
     */
    protected $isDraft = null;

    /**
     * @var boolean
     */
    protected $isFromMe = null;

    /**
     * @var boolean
     */
    protected $isResend = null;

    /**
     * @var boolean
     */
    protected $isUnmodified = null;

    /**
     * @var \garethp\ews\API\Type\InternetHeaderType[]
     */
    protected $internetMessageHeaders = null;

    /**
     * @var \DateTime
     */
    protected $dateTimeSent = null;

    /**
     * @var \DateTime
     */
    protected $dateTimeCreated = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfResponseObjectsType
     */
    protected $responseObjects = null;

    /**
     * @var \DateTime
     */
    protected $reminderDueBy = null;

    /**
     * @var boolean
     */
    protected $reminderIsSet = null;

    /**
     * @var integer
     */
    protected $reminderMinutesBeforeStart = null;

    /**
     * @var string
     */
    protected $displayCc = null;

    /**
     * @var string
     */
    protected $displayTo = null;

    /**
     * @var boolean
     */
    protected $hasAttachments = null;

    /**
     * @var \garethp\ews\API\Type\ExtendedPropertyType[]
     */
    protected $extendedProperty = null;

    /**
     * @var string
     */
    protected $culture = null;

    /**
     * @var \garethp\ews\API\Type\EffectiveRightsType
     */
    protected $effectiveRights = null;

    /**
     * @var string
     */
    protected $lastModifiedName = null;

    /**
     * @var \DateTime
     */
    protected $lastModifiedTime = null;

    /**
     * @var boolean
     */
    protected $isAssociated = null;

    /**
     * @var string
     */
    protected $webClientReadFormQueryString = null;

    /**
     * @var string
     */
    protected $webClientEditFormQueryString = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $conversationId = null;

    /**
     * @var \garethp\ews\API\Type\BodyType
     */
    protected $uniqueBody = null;

    /**
     * @var string
     */
    protected $storeEntryId = null;

    /**
     * @var \DateTime
     */
    protected $reminderNextTime = null;

    /**
     * @var string
     */
    protected $displayBcc = null;

    /**
     * @var \garethp\ews\API\Type\FlagType
     */
    protected $flag = null;

    /**
     * @var string
     */
    protected $instanceKey = null;

    /**
     * @var \garethp\ews\API\Type\BodyType
     */
    protected $normalizedBody = null;

    /**
     * @var \garethp\ews\API\Type\EntityExtractionResultType
     */
    protected $entityExtractionResult = null;

    /**
     * @var \garethp\ews\API\Type\RetentionTagType
     */
    protected $policyTag = null;

    /**
     * @var \garethp\ews\API\Type\RetentionTagType
     */
    protected $archiveTag = null;

    /**
     * @var \DateTime
     */
    protected $retentionDate = null;

    /**
     * @var string
     */
    protected $preview = null;

    /**
     * @var \garethp\ews\API\Type\RightsManagementLicenseDataType
     */
    protected $rightsManagementLicenseData = null;

    /**
     * @var string[]
     */
    protected $predictedActionReasons = null;

    /**
     * @var boolean
     */
    protected $isClutter = null;

    /**
     * @var boolean
     */
    protected $blockStatus = null;

    /**
     * @var boolean
     */
    protected $hasBlockedImages = null;

    /**
     * @var \garethp\ews\API\Type\BodyType
     */
    protected $textBody = null;

    /**
     * @var string
     */
    protected $iconIndex = null;

    /**
     * @var string
     */
    protected $searchKey = null;

    /**
     * @var integer
     */
    protected $sortKey = null;

    /**
     * @var string[]
     */
    protected $hashtags = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $mentions = null;

    /**
     * @var boolean
     */
    protected $mentionedMe = null;

    /**
     * @var \garethp\ews\API\Type\MentionsPreviewType
     */
    protected $mentionsPreview = null;

    /**
     * @var \garethp\ews\API\Type\MentionActionType[]
     */
    protected $mentionsEx = null;

    /**
     * @var \garethp\ews\API\Type\AppliedHashtagType[]
     */
    protected $appliedHashtags = null;

    /**
     * @var \garethp\ews\API\Type\AppliedHashtagsPreviewType
     */
    protected $appliedHashtagsPreview = null;

    /**
     * @var \garethp\ews\API\Type\LikeType[]
     */
    protected $likes = null;

    /**
     * @var \garethp\ews\API\Type\LikesPreviewType
     */
    protected $likesPreview = null;

    /**
     * @var string[]
     */
    protected $pendingSocialActivityTagIds = null;

    /**
     * @var boolean
     */
    protected $atAllMention = null;

    /**
     * @var boolean
     */
    protected $canDelete = null;

    /**
     * @var string
     */
    protected $inferenceClassification = null;

    /**
     * @autogenerated This method is safe to replace
     * @return MimeContentType
     */
    public function getMimeContent()
    {
        return $this->mimeContent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MimeContentType
     * @return ItemType
     */
    public function setMimeContent(MimeContentType $value)
    {
        $this->mimeContent = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return ItemType
     */
    public function setItemId(ItemIdType $value)
    {
        $this->itemId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType
     * @return ItemType
     */
    public function setParentFolderId(FolderIdType $value)
    {
        $this->parentFolderId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getItemClass()
    {
        return $this->itemClass;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setItemClass($value)
    {
        $this->itemClass = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setSubject($value)
    {
        $this->subject = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setSensitivity($value)
    {
        $this->sensitivity = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return BodyType
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyType
     * @return ItemType
     */
    public function setBody(BodyType $value)
    {
        $this->body = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return NonEmptyArrayOfAttachmentsType
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfAttachmentsType
     * @return ItemType
     */
    public function setAttachments(NonEmptyArrayOfAttachmentsType $value)
    {
        $this->attachments = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getDateTimeReceived()
    {
        return $this->dateTimeReceived;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setDateTimeReceived(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->dateTimeReceived = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ItemType
     */
    public function setSize($value)
    {
        $this->size = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function addCategories($value)
    {
        if ($this->categories === null) {
                        $this->categories = array();
        }

        if (!is_array($this->categories)) {
            $this->categories = array($this->categories);
        }

        $this->categories[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ItemType
     */
    public function setCategories(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->categories = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setImportance($value)
    {
        $this->importance = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setInReplyTo($value)
    {
        $this->inReplyTo = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isSubmitted()
    {
        return ((bool) $this->isSubmitted);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsSubmitted()
    {
        return $this->isSubmitted;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsSubmitted($value)
    {
        $this->isSubmitted = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isDraft()
    {
        return ((bool) $this->isDraft);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsDraft()
    {
        return $this->isDraft;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsDraft($value)
    {
        $this->isDraft = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isFromMe()
    {
        return ((bool) $this->isFromMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsFromMe()
    {
        return $this->isFromMe;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsFromMe($value)
    {
        $this->isFromMe = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isResend()
    {
        return ((bool) $this->isResend);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsResend()
    {
        return $this->isResend;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsResend($value)
    {
        $this->isResend = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isUnmodified()
    {
        return ((bool) $this->isUnmodified);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsUnmodified()
    {
        return $this->isUnmodified;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsUnmodified($value)
    {
        $this->isUnmodified = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value InternetHeaderType
     * @return ItemType
     */
    public function addInternetMessageHeaders(InternetHeaderType $value)
    {
        if ($this->internetMessageHeaders === null) {
                        $this->internetMessageHeaders = array();
        }

        if (!is_array($this->internetMessageHeaders)) {
            $this->internetMessageHeaders = array($this->internetMessageHeaders);
        }

        $this->internetMessageHeaders[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return InternetHeaderType[]
     */
    public function getInternetMessageHeaders()
    {
        return $this->internetMessageHeaders;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value InternetHeaderType[]|InternetHeaderType
     * @return ItemType
     */
    public function setInternetMessageHeaders(array|InternetHeaderType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->internetMessageHeaders = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getDateTimeSent()
    {
        return $this->dateTimeSent;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setDateTimeSent(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->dateTimeSent = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getDateTimeCreated()
    {
        return $this->dateTimeCreated;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setDateTimeCreated(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->dateTimeCreated = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return NonEmptyArrayOfResponseObjectsType
     */
    public function getResponseObjects()
    {
        return $this->responseObjects;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfResponseObjectsType
     * @return ItemType
     */
    public function setResponseObjects(NonEmptyArrayOfResponseObjectsType $value)
    {
        $this->responseObjects = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getReminderDueBy()
    {
        return $this->reminderDueBy;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setReminderDueBy(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->reminderDueBy = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isReminderIsSet()
    {
        return ((bool) $this->reminderIsSet);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getReminderIsSet()
    {
        return $this->reminderIsSet;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setReminderIsSet($value)
    {
        $this->reminderIsSet = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getReminderNextTime()
    {
        return $this->reminderNextTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setReminderNextTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->reminderNextTime = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getReminderMinutesBeforeStart()
    {
        return $this->reminderMinutesBeforeStart;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ItemType
     */
    public function setReminderMinutesBeforeStart($value)
    {
        $this->reminderMinutesBeforeStart = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayCc()
    {
        return $this->displayCc;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setDisplayCc($value)
    {
        $this->displayCc = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayTo()
    {
        return $this->displayTo;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setDisplayTo($value)
    {
        $this->displayTo = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayBcc()
    {
        return $this->displayBcc;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setDisplayBcc($value)
    {
        $this->displayBcc = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isHasAttachments()
    {
        return ((bool) $this->hasAttachments);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getHasAttachments()
    {
        return $this->hasAttachments;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setHasAttachments($value)
    {
        $this->hasAttachments = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedPropertyType
     * @return ItemType
     */
    public function addExtendedProperty(ExtendedPropertyType $value)
    {
        if ($this->extendedProperty === null) {
                        $this->extendedProperty = array();
        }

        if (!is_array($this->extendedProperty)) {
            $this->extendedProperty = array($this->extendedProperty);
        }

        $this->extendedProperty[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ExtendedPropertyType[]
     */
    public function getExtendedProperty()
    {
        return $this->extendedProperty;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedPropertyType[]|ExtendedPropertyType
     * @return ItemType
     */
    public function setExtendedProperty(array|ExtendedPropertyType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->extendedProperty = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getCulture()
    {
        return $this->culture;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setCulture($value)
    {
        $this->culture = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EffectiveRightsType
     */
    public function getEffectiveRights()
    {
        return $this->effectiveRights;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EffectiveRightsType
     * @return ItemType
     */
    public function setEffectiveRights(EffectiveRightsType $value)
    {
        $this->effectiveRights = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getLastModifiedName()
    {
        return $this->lastModifiedName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setLastModifiedName($value)
    {
        $this->lastModifiedName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setLastModifiedTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->lastModifiedTime = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isAssociated()
    {
        return ((bool) $this->isAssociated);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsAssociated()
    {
        return $this->isAssociated;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsAssociated($value)
    {
        $this->isAssociated = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getWebClientReadFormQueryString()
    {
        return $this->webClientReadFormQueryString;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setWebClientReadFormQueryString($value)
    {
        $this->webClientReadFormQueryString = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getWebClientEditFormQueryString()
    {
        return $this->webClientEditFormQueryString;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setWebClientEditFormQueryString($value)
    {
        $this->webClientEditFormQueryString = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemIdType
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return ItemType
     */
    public function setConversationId(ItemIdType $value)
    {
        $this->conversationId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return BodyType
     */
    public function getUniqueBody()
    {
        return $this->uniqueBody;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyType
     * @return ItemType
     */
    public function setUniqueBody(BodyType $value)
    {
        $this->uniqueBody = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FlagType
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FlagType
     * @return ItemType
     */
    public function setFlag(FlagType $value)
    {
        $this->flag = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getStoreEntryId()
    {
        return $this->storeEntryId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setStoreEntryId($value)
    {
        $this->storeEntryId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getInstanceKey()
    {
        return $this->instanceKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setInstanceKey($value)
    {
        $this->instanceKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return BodyType
     */
    public function getNormalizedBody()
    {
        return $this->normalizedBody;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyType
     * @return ItemType
     */
    public function setNormalizedBody(BodyType $value)
    {
        $this->normalizedBody = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EntityExtractionResultType
     */
    public function getEntityExtractionResult()
    {
        return $this->entityExtractionResult;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EntityExtractionResultType
     * @return ItemType
     */
    public function setEntityExtractionResult(EntityExtractionResultType $value)
    {
        $this->entityExtractionResult = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RetentionTagType
     */
    public function getPolicyTag()
    {
        return $this->policyTag;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RetentionTagType
     * @return ItemType
     */
    public function setPolicyTag(RetentionTagType $value)
    {
        $this->policyTag = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RetentionTagType
     */
    public function getArchiveTag()
    {
        return $this->archiveTag;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RetentionTagType
     * @return ItemType
     */
    public function setArchiveTag(RetentionTagType $value)
    {
        $this->archiveTag = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getRetentionDate()
    {
        return $this->retentionDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setRetentionDate(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->retentionDate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setPreview($value)
    {
        $this->preview = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RightsManagementLicenseDataType
     */
    public function getRightsManagementLicenseData()
    {
        return $this->rightsManagementLicenseData;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RightsManagementLicenseDataType
     * @return ItemType
     */
    public function setRightsManagementLicenseData(RightsManagementLicenseDataType $value)
    {
        $this->rightsManagementLicenseData = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function addPredictedActionReasons($value)
    {
        if ($this->predictedActionReasons === null) {
                        $this->predictedActionReasons = array();
        }

        if (!is_array($this->predictedActionReasons)) {
            $this->predictedActionReasons = array($this->predictedActionReasons);
        }

        $this->predictedActionReasons[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getPredictedActionReasons()
    {
        return $this->predictedActionReasons;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ItemType
     */
    public function setPredictedActionReasons(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->predictedActionReasons = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isClutter()
    {
        return ((bool) $this->isClutter);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsClutter()
    {
        return $this->isClutter;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsClutter($value)
    {
        $this->isClutter = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isBlockStatus()
    {
        return ((bool) $this->blockStatus);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getBlockStatus()
    {
        return $this->blockStatus;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setBlockStatus($value)
    {
        $this->blockStatus = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isHasBlockedImages()
    {
        return ((bool) $this->hasBlockedImages);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getHasBlockedImages()
    {
        return $this->hasBlockedImages;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setHasBlockedImages($value)
    {
        $this->hasBlockedImages = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return BodyType
     */
    public function getTextBody()
    {
        return $this->textBody;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyType
     * @return ItemType
     */
    public function setTextBody(BodyType $value)
    {
        $this->textBody = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getIconIndex()
    {
        return $this->iconIndex;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setIconIndex($value)
    {
        $this->iconIndex = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSearchKey()
    {
        return $this->searchKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setSearchKey($value)
    {
        $this->searchKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getSortKey()
    {
        return $this->sortKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ItemType
     */
    public function setSortKey($value)
    {
        $this->sortKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function addHashtags($value)
    {
        if ($this->hashtags === null) {
                        $this->hashtags = array();
        }

        if (!is_array($this->hashtags)) {
            $this->hashtags = array($this->hashtags);
        }

        $this->hashtags[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getHashtags()
    {
        return $this->hashtags;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ItemType
     */
    public function setHashtags(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->hashtags = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return ItemType
     */
    public function addMentions(EmailAddressType $value)
    {
        if ($this->mentions === null) {
                        $this->mentions = array();
        }

        if (!is_array($this->mentions)) {
            $this->mentions = array($this->mentions);
        }

        $this->mentions[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressType[]
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]|EmailAddressType
     * @return ItemType
     */
    public function setMentions(array|EmailAddressType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->mentions = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isMentionedMe()
    {
        return ((bool) $this->mentionedMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getMentionedMe()
    {
        return $this->mentionedMe;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setMentionedMe($value)
    {
        $this->mentionedMe = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MentionsPreviewType
     */
    public function getMentionsPreview()
    {
        return $this->mentionsPreview;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MentionsPreviewType
     * @return ItemType
     */
    public function setMentionsPreview(MentionsPreviewType $value)
    {
        $this->mentionsPreview = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MentionActionType
     * @return ItemType
     */
    public function addMentionsEx(MentionActionType $value)
    {
        if ($this->mentionsEx === null) {
                        $this->mentionsEx = array();
        }

        if (!is_array($this->mentionsEx)) {
            $this->mentionsEx = array($this->mentionsEx);
        }

        $this->mentionsEx[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MentionActionType[]
     */
    public function getMentionsEx()
    {
        return $this->mentionsEx;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MentionActionType[]|MentionActionType
     * @return ItemType
     */
    public function setMentionsEx(array|MentionActionType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->mentionsEx = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AppliedHashtagType
     * @return ItemType
     */
    public function addAppliedHashtags(AppliedHashtagType $value)
    {
        if ($this->appliedHashtags === null) {
                        $this->appliedHashtags = array();
        }

        if (!is_array($this->appliedHashtags)) {
            $this->appliedHashtags = array($this->appliedHashtags);
        }

        $this->appliedHashtags[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AppliedHashtagType[]
     */
    public function getAppliedHashtags()
    {
        return $this->appliedHashtags;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AppliedHashtagType[]|AppliedHashtagType
     * @return ItemType
     */
    public function setAppliedHashtags(array|AppliedHashtagType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->appliedHashtags = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AppliedHashtagsPreviewType
     */
    public function getAppliedHashtagsPreview()
    {
        return $this->appliedHashtagsPreview;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AppliedHashtagsPreviewType
     * @return ItemType
     */
    public function setAppliedHashtagsPreview(AppliedHashtagsPreviewType $value)
    {
        $this->appliedHashtagsPreview = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value LikeType
     * @return ItemType
     */
    public function addLikes(LikeType $value)
    {
        if ($this->likes === null) {
                        $this->likes = array();
        }

        if (!is_array($this->likes)) {
            $this->likes = array($this->likes);
        }

        $this->likes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return LikeType[]
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value LikeType[]|LikeType
     * @return ItemType
     */
    public function setLikes(array|LikeType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->likes = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return LikesPreviewType
     */
    public function getLikesPreview()
    {
        return $this->likesPreview;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value LikesPreviewType
     * @return ItemType
     */
    public function setLikesPreview(LikesPreviewType $value)
    {
        $this->likesPreview = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function addPendingSocialActivityTagIds($value)
    {
        if ($this->pendingSocialActivityTagIds === null) {
                        $this->pendingSocialActivityTagIds = array();
        }

        if (!is_array($this->pendingSocialActivityTagIds)) {
            $this->pendingSocialActivityTagIds = array($this->pendingSocialActivityTagIds);
        }

        $this->pendingSocialActivityTagIds[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getPendingSocialActivityTagIds()
    {
        return $this->pendingSocialActivityTagIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ItemType
     */
    public function setPendingSocialActivityTagIds(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->pendingSocialActivityTagIds = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isAtAllMention()
    {
        return ((bool) $this->atAllMention);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getAtAllMention()
    {
        return $this->atAllMention;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setAtAllMention($value)
    {
        $this->atAllMention = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isCanDelete()
    {
        return ((bool) $this->canDelete);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getCanDelete()
    {
        return $this->canDelete;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setCanDelete($value)
    {
        $this->canDelete = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getInferenceClassification()
    {
        return $this->inferenceClassification;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setInferenceClassification($value)
    {
        $this->inferenceClassification = $value;
        return $this;
    }
}
