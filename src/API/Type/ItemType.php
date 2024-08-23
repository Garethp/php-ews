<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ItemType
 *
 *
 * XSD Type: ItemType
 *
 * @method ItemType addCategories(string $categories)
 * @method ItemType addInternetMessageHeaders(InternetHeaderType $internetMessageHeaders)
 * @method ItemType addExtendedProperty(ExtendedPropertyType $extendedProperty)
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
     * @return boolean
     */
    public function getIsSubmitted()
    {
        return $this->isSubmitted;
    }

    /**
     * @return boolean
     */
    public function getIsDraft()
    {
        return $this->isDraft;
    }

    /**
     * @return boolean
     */
    public function getIsFromMe()
    {
        return $this->isFromMe;
    }

    /**
     * @return boolean
     */
    public function getIsResend()
    {
        return $this->isResend;
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value MimeContentType
     * @return ItemType
     */
    public function setMimeContent(MimeContentType $value)
    {
        $this->mimeContent = $this->castValueIfNeeded("mimeContent", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return ItemType
     */
    public function setItemId(ItemIdType $value)
    {
        $this->itemId = $this->castValueIfNeeded("itemId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType
     * @return ItemType
     */
    public function setParentFolderId(FolderIdType $value)
    {
        $this->parentFolderId = $this->castValueIfNeeded("parentFolderId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setItemClass($value)
    {
        $this->itemClass = $this->castValueIfNeeded("itemClass", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setSubject($value)
    {
        $this->subject = $this->castValueIfNeeded("subject", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setSensitivity($value)
    {
        $this->sensitivity = $this->castValueIfNeeded("sensitivity", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyType
     * @return ItemType
     */
    public function setBody(BodyType $value)
    {
        $this->body = $this->castValueIfNeeded("body", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfAttachmentsType
     * @return ItemType
     */
    public function setAttachments(NonEmptyArrayOfAttachmentsType $value)
    {
        $this->attachments = $this->castValueIfNeeded("attachments", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setDateTimeReceived(\DateTime|string $value)
    {
        $this->dateTimeReceived = $this->castValueIfNeeded("dateTimeReceived", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ItemType
     */
    public function setSize($value)
    {
        $this->size = $this->castValueIfNeeded("size", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ItemType
     */
    public function setCategories(array $value)
    {
        $this->categories = $this->castValueIfNeeded("categories", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setImportance($value)
    {
        $this->importance = $this->castValueIfNeeded("importance", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setInReplyTo($value)
    {
        $this->inReplyTo = $this->castValueIfNeeded("inReplyTo", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isSubmitted()
    {
        return ((bool) $this->isSubmitted);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsSubmitted($value)
    {
        $this->isSubmitted = $this->castValueIfNeeded("isSubmitted", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isDraft()
    {
        return ((bool) $this->isDraft);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsDraft($value)
    {
        $this->isDraft = $this->castValueIfNeeded("isDraft", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isFromMe()
    {
        return ((bool) $this->isFromMe);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsFromMe($value)
    {
        $this->isFromMe = $this->castValueIfNeeded("isFromMe", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isResend()
    {
        return ((bool) $this->isResend);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsResend($value)
    {
        $this->isResend = $this->castValueIfNeeded("isResend", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isUnmodified()
    {
        return ((bool) $this->isUnmodified);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsUnmodified($value)
    {
        $this->isUnmodified = $this->castValueIfNeeded("isUnmodified", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value InternetHeaderType[]
     * @return ItemType
     */
    public function setInternetMessageHeaders(array $value)
    {
        $this->internetMessageHeaders = $this->castValueIfNeeded("internetMessageHeaders", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setDateTimeSent(\DateTime|string $value)
    {
        $this->dateTimeSent = $this->castValueIfNeeded("dateTimeSent", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setDateTimeCreated(\DateTime|string $value)
    {
        $this->dateTimeCreated = $this->castValueIfNeeded("dateTimeCreated", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfResponseObjectsType
     * @return ItemType
     */
    public function setResponseObjects(NonEmptyArrayOfResponseObjectsType $value)
    {
        $this->responseObjects = $this->castValueIfNeeded("responseObjects", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setReminderDueBy(\DateTime|string $value)
    {
        $this->reminderDueBy = $this->castValueIfNeeded("reminderDueBy", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isReminderIsSet()
    {
        return ((bool) $this->reminderIsSet);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setReminderIsSet($value)
    {
        $this->reminderIsSet = $this->castValueIfNeeded("reminderIsSet", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ItemType
     */
    public function setReminderMinutesBeforeStart($value)
    {
        $this->reminderMinutesBeforeStart = $this->castValueIfNeeded("reminderMinutesBeforeStart", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setDisplayCc($value)
    {
        $this->displayCc = $this->castValueIfNeeded("displayCc", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setDisplayTo($value)
    {
        $this->displayTo = $this->castValueIfNeeded("displayTo", $value);
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
     * @return ItemType
     */
    public function setHasAttachments($value)
    {
        $this->hasAttachments = $this->castValueIfNeeded("hasAttachments", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedPropertyType[]
     * @return ItemType
     */
    public function setExtendedProperty(array $value)
    {
        $this->extendedProperty = $this->castValueIfNeeded("extendedProperty", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setCulture($value)
    {
        $this->culture = $this->castValueIfNeeded("culture", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EffectiveRightsType
     * @return ItemType
     */
    public function setEffectiveRights(EffectiveRightsType $value)
    {
        $this->effectiveRights = $this->castValueIfNeeded("effectiveRights", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setLastModifiedName($value)
    {
        $this->lastModifiedName = $this->castValueIfNeeded("lastModifiedName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ItemType
     */
    public function setLastModifiedTime(\DateTime|string $value)
    {
        $this->lastModifiedTime = $this->castValueIfNeeded("lastModifiedTime", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isAssociated()
    {
        return ((bool) $this->isAssociated);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ItemType
     */
    public function setIsAssociated($value)
    {
        $this->isAssociated = $this->castValueIfNeeded("isAssociated", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setWebClientReadFormQueryString($value)
    {
        $this->webClientReadFormQueryString = $this->castValueIfNeeded("webClientReadFormQueryString", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setWebClientEditFormQueryString($value)
    {
        $this->webClientEditFormQueryString = $this->castValueIfNeeded("webClientEditFormQueryString", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return ItemType
     */
    public function setConversationId(ItemIdType $value)
    {
        $this->conversationId = $this->castValueIfNeeded("conversationId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyType
     * @return ItemType
     */
    public function setUniqueBody(BodyType $value)
    {
        $this->uniqueBody = $this->castValueIfNeeded("uniqueBody", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ItemType
     */
    public function setStoreEntryId($value)
    {
        $this->storeEntryId = $this->castValueIfNeeded("storeEntryId", $value);
        return $this;
    }
}
