<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ItemType
 *
 *
 * XSD Type: ItemType
 *
 * @method ItemType setMimeContent(MimeContentType $mimeContent)
 * @method ItemType setItemId(ItemIdType $itemId)
 * @method ItemType setParentFolderId(FolderIdType $parentFolderId)
 * @method ItemType setItemClass(string $itemClass)
 * @method ItemType setSubject(string $subject)
 * @method ItemType setSensitivity(string $sensitivity)
 * @method ItemType setBody(BodyType $body)
 * @method ItemType setAttachments(NonEmptyArrayOfAttachmentsType $attachments)
 * @method ItemType setDateTimeReceived(\DateTime $dateTimeReceived)
 * @method ItemType setSize(integer $size)
 * @method ItemType addCategories(string $categories)
 * @method ItemType setCategories(array $categories)
 * @method ItemType setImportance(string $importance)
 * @method ItemType setInReplyTo(string $inReplyTo)
 * @method ItemType setIsSubmitted(boolean $isSubmitted)
 * @method ItemType setIsDraft(boolean $isDraft)
 * @method ItemType setIsFromMe(boolean $isFromMe)
 * @method ItemType setIsResend(boolean $isResend)
 * @method ItemType setIsUnmodified(boolean $isUnmodified)
 * @method ItemType addInternetMessageHeaders(InternetHeaderType $internetMessageHeaders)
 * @method ItemType setInternetMessageHeaders(array $internetMessageHeaders)
 * @method ItemType setDateTimeSent(\DateTime $dateTimeSent)
 * @method ItemType setDateTimeCreated(\DateTime $dateTimeCreated)
 * @method ItemType setResponseObjects(NonEmptyArrayOfResponseObjectsType $responseObjects)
 * @method ItemType setReminderDueBy(\DateTime $reminderDueBy)
 * @method ItemType setReminderIsSet(boolean $reminderIsSet)
 * @method ItemType setReminderMinutesBeforeStart(integer $reminderMinutesBeforeStart)
 * @method ItemType setDisplayCc(string $displayCc)
 * @method ItemType setDisplayTo(string $displayTo)
 * @method ItemType setHasAttachments(boolean $hasAttachments)
 * @method ItemType addExtendedProperty(ExtendedPropertyType $extendedProperty)
 * @method ItemType setExtendedProperty(array $extendedProperty)
 * @method ItemType setCulture(string $culture)
 * @method ItemType setEffectiveRights(EffectiveRightsType $effectiveRights)
 * @method ItemType setLastModifiedName(string $lastModifiedName)
 * @method ItemType setLastModifiedTime(\DateTime $lastModifiedTime)
 * @method ItemType setIsAssociated(boolean $isAssociated)
 * @method ItemType setWebClientReadFormQueryString(string $webClientReadFormQueryString)
 * @method ItemType setWebClientEditFormQueryString(string $webClientEditFormQueryString)
 * @method ItemType setConversationId(ItemIdType $conversationId)
 * @method ItemType setUniqueBody(BodyType $uniqueBody)
 * @method ItemType setStoreEntryId(string $storeEntryId)
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

    protected $_typeMap = array(
        'dateTimeReceived' => 'dateTime',
        'dateTimeSent' => 'dateTime',
        'dateTimeCreated' => 'dateTime',
        'reminderDueBy' => 'dateTime',
        'lastModifiedTime' => 'dateTime',
    );

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
     * @return MimeContentType
     */
    public function getMimeContent()
    {
        return $this->mimeContent;
    }

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return FolderIdType
     */
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @return string
     */
    public function getItemClass()
    {
        return $this->itemClass;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * @return BodyType
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return NonEmptyArrayOfAttachmentsType
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeReceived()
    {
        return $this->dateTimeReceived;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return string[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return string
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @return string
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     * @returns bool
     */
    public function isSubmitted()
    {
        return ((bool) $this->isSubmitted);
    }

    /**
     * @return boolean
     */
    public function getIsSubmitted()
    {
        return $this->isSubmitted;
    }

    /**
     * @returns bool
     */
    public function isDraft()
    {
        return ((bool) $this->isDraft);
    }

    /**
     * @return boolean
     */
    public function getIsDraft()
    {
        return $this->isDraft;
    }

    /**
     * @returns bool
     */
    public function isFromMe()
    {
        return ((bool) $this->isFromMe);
    }

    /**
     * @return boolean
     */
    public function getIsFromMe()
    {
        return $this->isFromMe;
    }

    /**
     * @returns bool
     */
    public function isResend()
    {
        return ((bool) $this->isResend);
    }

    /**
     * @return boolean
     */
    public function getIsResend()
    {
        return $this->isResend;
    }

    /**
     * @returns bool
     */
    public function isUnmodified()
    {
        return ((bool) $this->isUnmodified);
    }

    /**
     * @return boolean
     */
    public function getIsUnmodified()
    {
        return $this->isUnmodified;
    }

    /**
     * @return InternetHeaderType[]
     */
    public function getInternetMessageHeaders()
    {
        return $this->internetMessageHeaders;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeSent()
    {
        return $this->dateTimeSent;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeCreated()
    {
        return $this->dateTimeCreated;
    }

    /**
     * @return NonEmptyArrayOfResponseObjectsType
     */
    public function getResponseObjects()
    {
        return $this->responseObjects;
    }

    /**
     * @return \DateTime
     */
    public function getReminderDueBy()
    {
        return $this->reminderDueBy;
    }

    /**
     * @returns bool
     */
    public function isReminderIsSet()
    {
        return ((bool) $this->reminderIsSet);
    }

    /**
     * @return boolean
     */
    public function getReminderIsSet()
    {
        return $this->reminderIsSet;
    }

    /**
     * @return integer
     */
    public function getReminderMinutesBeforeStart()
    {
        return $this->reminderMinutesBeforeStart;
    }

    /**
     * @return string
     */
    public function getDisplayCc()
    {
        return $this->displayCc;
    }

    /**
     * @return string
     */
    public function getDisplayTo()
    {
        return $this->displayTo;
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
     * @return ExtendedPropertyType[]
     */
    public function getExtendedProperty()
    {
        return $this->extendedProperty;
    }

    /**
     * @return string
     */
    public function getCulture()
    {
        return $this->culture;
    }

    /**
     * @return EffectiveRightsType
     */
    public function getEffectiveRights()
    {
        return $this->effectiveRights;
    }

    /**
     * @return string
     */
    public function getLastModifiedName()
    {
        return $this->lastModifiedName;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @returns bool
     */
    public function isAssociated()
    {
        return ((bool) $this->isAssociated);
    }

    /**
     * @return boolean
     */
    public function getIsAssociated()
    {
        return $this->isAssociated;
    }

    /**
     * @return string
     */
    public function getWebClientReadFormQueryString()
    {
        return $this->webClientReadFormQueryString;
    }

    /**
     * @return string
     */
    public function getWebClientEditFormQueryString()
    {
        return $this->webClientEditFormQueryString;
    }

    /**
     * @return ItemIdType
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * @return BodyType
     */
    public function getUniqueBody()
    {
        return $this->uniqueBody;
    }

    /**
     * @return string
     */
    public function getStoreEntryId()
    {
        return $this->storeEntryId;
    }
}
