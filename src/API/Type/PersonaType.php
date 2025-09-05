<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PersonaType
 *
 *
 * XSD Type: PersonaType
 */
class PersonaType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $personaId = null;

    /**
     * @var string
     */
    protected $personaType = null;

    /**
     * @var string
     */
    protected $personaObjectStatus = null;

    /**
     * @var \DateTime
     */
    protected $creationTime = null;

    /**
     * @var \garethp\ews\API\Type\BodyContentAttributedValueType[]
     */
    protected $bodies = null;

    /**
     * @var string
     */
    protected $displayNameFirstLastSortKey = null;

    /**
     * @var string
     */
    protected $displayNameLastFirstSortKey = null;

    /**
     * @var string
     */
    protected $companyNameSortKey = null;

    /**
     * @var string
     */
    protected $homeCitySortKey = null;

    /**
     * @var string
     */
    protected $workCitySortKey = null;

    /**
     * @var string
     */
    protected $displayNameFirstLastHeader = null;

    /**
     * @var string
     */
    protected $displayNameLastFirstHeader = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var string
     */
    protected $displayNameFirstLast = null;

    /**
     * @var string
     */
    protected $displayNameLastFirst = null;

    /**
     * @var string
     */
    protected $fileAs = null;

    /**
     * @var string
     */
    protected $fileAsId = null;

    /**
     * @var string
     */
    protected $displayNamePrefix = null;

    /**
     * @var string
     */
    protected $givenName = null;

    /**
     * @var string
     */
    protected $middleName = null;

    /**
     * @var string
     */
    protected $surname = null;

    /**
     * @var string
     */
    protected $generation = null;

    /**
     * @var string
     */
    protected $nickname = null;

    /**
     * @var string
     */
    protected $yomiCompanyName = null;

    /**
     * @var string
     */
    protected $yomiFirstName = null;

    /**
     * @var string
     */
    protected $yomiLastName = null;

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $department = null;

    /**
     * @var string
     */
    protected $companyName = null;

    /**
     * @var string
     */
    protected $location = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $emailAddress = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $emailAddresses = null;

    /**
     * @var \garethp\ews\API\Type\PersonaPhoneNumberType
     */
    protected $phoneNumber = null;

    /**
     * @var string
     */
    protected $imAddress = null;

    /**
     * @var string
     */
    protected $homeCity = null;

    /**
     * @var string
     */
    protected $workCity = null;

    /**
     * @var integer
     */
    protected $relevanceScore = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType[]
     */
    protected $folderIds = null;

    /**
     * @var \garethp\ews\API\Type\PersonaAttributionType[]
     */
    protected $attributions = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $displayNames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $fileAses = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $fileAsIds = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $displayNamePrefixes = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $givenNames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $middleNames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $surnames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $generations = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $nicknames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $initials = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $yomiCompanyNames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $yomiFirstNames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $yomiLastNames = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $businessPhoneNumbers = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $businessPhoneNumbers2 = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $homePhones = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $homePhones2 = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $mobilePhones = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $mobilePhones2 = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $assistantPhoneNumbers = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $callbackPhones = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $carPhones = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $homeFaxes = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $organizationMainPhones = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $otherFaxes = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $otherTelephones = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $otherPhones2 = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $pagers = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $radioPhones = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $telexNumbers = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $tTYTDDPhoneNumbers = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberAttributedValueType[]
     */
    protected $workFaxes = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressAttributedValueType[]
     */
    protected $emails1 = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressAttributedValueType[]
     */
    protected $emails2 = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressAttributedValueType[]
     */
    protected $emails3 = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $businessHomePages = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $personalHomePages = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $officeLocations = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $imAddresses = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $imAddresses2 = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $imAddresses3 = null;

    /**
     * @var \garethp\ews\API\Type\PostalAddressAttributedValueType[]
     */
    protected $businessAddresses = null;

    /**
     * @var \garethp\ews\API\Type\PostalAddressAttributedValueType[]
     */
    protected $homeAddresses = null;

    /**
     * @var \garethp\ews\API\Type\PostalAddressAttributedValueType[]
     */
    protected $otherAddresses = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $titles = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $departments = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $companyNames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $managers = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $assistantNames = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $professions = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $spouseNames = null;

    /**
     * @var \garethp\ews\API\Type\StringArrayAttributedValueType[]
     */
    protected $children = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $schools = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $hobbies = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $weddingAnniversaries = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $birthdays = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $locations = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $inlineLinks = null;

    /**
     * @var \garethp\ews\API\Type\StringArrayAttributedValueType[]
     */
    protected $itemLinkIds = null;

    /**
     * @var string
     */
    protected $hasActiveDeals = null;

    /**
     * @var string
     */
    protected $isBusinessContact = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $attributedHasActiveDeals = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $attributedIsBusinessContact = null;

    /**
     * @var \garethp\ews\API\Type\StringAttributedValueType[]
     */
    protected $sourceMailboxGuids = null;

    /**
     * @var \DateTime
     */
    protected $lastContactedDate = null;

    /**
     * @var \garethp\ews\API\Type\ExtendedPropertyAttributedValueType[]
     */
    protected $extendedProperties = null;

    /**
     * @var string
     */
    protected $externalDirectoryObjectId = null;

    /**
     * @var string
     */
    protected $mapiEntryId = null;

    /**
     * @var string
     */
    protected $mapiEmailAddress = null;

    /**
     * @var string
     */
    protected $mapiAddressType = null;

    /**
     * @var string
     */
    protected $mapiSearchKey = null;

    /**
     * @var string
     */
    protected $mapiTransmittableDisplayName = null;

    /**
     * @var boolean
     */
    protected $mapiSendRichInfo = null;

    /**
     * @autogenerated This method is safe to replace
     * @return ItemIdType
     */
    public function getPersonaId()
    {
        return $this->personaId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return PersonaType
     */
    public function setPersonaId(ItemIdType $value)
    {
        $this->personaId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPersonaType()
    {
        return $this->personaType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setPersonaType($value)
    {
        $this->personaType = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPersonaObjectStatus()
    {
        return $this->personaObjectStatus;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setPersonaObjectStatus($value)
    {
        $this->personaObjectStatus = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return PersonaType
     */
    public function setCreationTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->creationTime = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyContentAttributedValueType
     * @return PersonaType
     */
    public function addBodies(BodyContentAttributedValueType $value)
    {
        if ($this->bodies === null) {
                        $this->bodies = array();
        }

        if (!is_array($this->bodies)) {
            $this->bodies = array($this->bodies);
        }

        $this->bodies[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return BodyContentAttributedValueType[]
     */
    public function getBodies()
    {
        return $this->bodies;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value BodyContentAttributedValueType[]|BodyContentAttributedValueType
     * @return PersonaType
     */
    public function setBodies(array|BodyContentAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->bodies = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayNameFirstLastSortKey()
    {
        return $this->displayNameFirstLastSortKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayNameFirstLastSortKey($value)
    {
        $this->displayNameFirstLastSortKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayNameLastFirstSortKey()
    {
        return $this->displayNameLastFirstSortKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayNameLastFirstSortKey($value)
    {
        $this->displayNameLastFirstSortKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getCompanyNameSortKey()
    {
        return $this->companyNameSortKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setCompanyNameSortKey($value)
    {
        $this->companyNameSortKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getHomeCitySortKey()
    {
        return $this->homeCitySortKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setHomeCitySortKey($value)
    {
        $this->homeCitySortKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getWorkCitySortKey()
    {
        return $this->workCitySortKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setWorkCitySortKey($value)
    {
        $this->workCitySortKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayNameFirstLastHeader()
    {
        return $this->displayNameFirstLastHeader;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayNameFirstLastHeader($value)
    {
        $this->displayNameFirstLastHeader = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayNameLastFirstHeader()
    {
        return $this->displayNameLastFirstHeader;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayNameLastFirstHeader($value)
    {
        $this->displayNameLastFirstHeader = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayNameFirstLast()
    {
        return $this->displayNameFirstLast;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayNameFirstLast($value)
    {
        $this->displayNameFirstLast = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayNameLastFirst()
    {
        return $this->displayNameLastFirst;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayNameLastFirst($value)
    {
        $this->displayNameLastFirst = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getFileAs()
    {
        return $this->fileAs;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setFileAs($value)
    {
        $this->fileAs = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getFileAsId()
    {
        return $this->fileAsId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setFileAsId($value)
    {
        $this->fileAsId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDisplayNamePrefix()
    {
        return $this->displayNamePrefix;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDisplayNamePrefix($value)
    {
        $this->displayNamePrefix = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setGivenName($value)
    {
        $this->givenName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setMiddleName($value)
    {
        $this->middleName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setSurname($value)
    {
        $this->surname = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setGeneration($value)
    {
        $this->generation = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setNickname($value)
    {
        $this->nickname = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getYomiCompanyName()
    {
        return $this->yomiCompanyName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setYomiCompanyName($value)
    {
        $this->yomiCompanyName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getYomiFirstName()
    {
        return $this->yomiFirstName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setYomiFirstName($value)
    {
        $this->yomiFirstName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getYomiLastName()
    {
        return $this->yomiLastName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setYomiLastName($value)
    {
        $this->yomiLastName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setTitle($value)
    {
        $this->title = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setDepartment($value)
    {
        $this->department = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setCompanyName($value)
    {
        $this->companyName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setLocation($value)
    {
        $this->location = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressType
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return PersonaType
     */
    public function setEmailAddress(EmailAddressType $value)
    {
        $this->emailAddress = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return PersonaType
     */
    public function addEmailAddresses(EmailAddressType $value)
    {
        if ($this->emailAddresses === null) {
                        $this->emailAddresses = array();
        }

        if (!is_array($this->emailAddresses)) {
            $this->emailAddresses = array($this->emailAddresses);
        }

        $this->emailAddresses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressType[]
     */
    public function getEmailAddresses()
    {
        return $this->emailAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]|EmailAddressType
     * @return PersonaType
     */
    public function setEmailAddresses(array|EmailAddressType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->emailAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PersonaPhoneNumberType
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PersonaPhoneNumberType
     * @return PersonaType
     */
    public function setPhoneNumber(PersonaPhoneNumberType $value)
    {
        $this->phoneNumber = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getImAddress()
    {
        return $this->imAddress;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setImAddress($value)
    {
        $this->imAddress = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getHomeCity()
    {
        return $this->homeCity;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setHomeCity($value)
    {
        $this->homeCity = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getWorkCity()
    {
        return $this->workCity;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setWorkCity($value)
    {
        $this->workCity = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getRelevanceScore()
    {
        return $this->relevanceScore;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return PersonaType
     */
    public function setRelevanceScore($value)
    {
        $this->relevanceScore = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType
     * @return PersonaType
     */
    public function addFolderIds(FolderIdType $value)
    {
        if ($this->folderIds === null) {
                        $this->folderIds = array();
        }

        if (!is_array($this->folderIds)) {
            $this->folderIds = array($this->folderIds);
        }

        $this->folderIds[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderIdType[]
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderIdType[]|FolderIdType
     * @return PersonaType
     */
    public function setFolderIds(array|FolderIdType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->folderIds = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PersonaAttributionType
     * @return PersonaType
     */
    public function addAttributions(PersonaAttributionType $value)
    {
        if ($this->attributions === null) {
                        $this->attributions = array();
        }

        if (!is_array($this->attributions)) {
            $this->attributions = array($this->attributions);
        }

        $this->attributions[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PersonaAttributionType[]
     */
    public function getAttributions()
    {
        return $this->attributions;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PersonaAttributionType[]|PersonaAttributionType
     * @return PersonaType
     */
    public function setAttributions(array|PersonaAttributionType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->attributions = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addDisplayNames(StringAttributedValueType $value)
    {
        if ($this->displayNames === null) {
                        $this->displayNames = array();
        }

        if (!is_array($this->displayNames)) {
            $this->displayNames = array($this->displayNames);
        }

        $this->displayNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getDisplayNames()
    {
        return $this->displayNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setDisplayNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->displayNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addFileAses(StringAttributedValueType $value)
    {
        if ($this->fileAses === null) {
                        $this->fileAses = array();
        }

        if (!is_array($this->fileAses)) {
            $this->fileAses = array($this->fileAses);
        }

        $this->fileAses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getFileAses()
    {
        return $this->fileAses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setFileAses(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->fileAses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addFileAsIds(StringAttributedValueType $value)
    {
        if ($this->fileAsIds === null) {
                        $this->fileAsIds = array();
        }

        if (!is_array($this->fileAsIds)) {
            $this->fileAsIds = array($this->fileAsIds);
        }

        $this->fileAsIds[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getFileAsIds()
    {
        return $this->fileAsIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setFileAsIds(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->fileAsIds = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addDisplayNamePrefixes(StringAttributedValueType $value)
    {
        if ($this->displayNamePrefixes === null) {
                        $this->displayNamePrefixes = array();
        }

        if (!is_array($this->displayNamePrefixes)) {
            $this->displayNamePrefixes = array($this->displayNamePrefixes);
        }

        $this->displayNamePrefixes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getDisplayNamePrefixes()
    {
        return $this->displayNamePrefixes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setDisplayNamePrefixes(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->displayNamePrefixes = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addGivenNames(StringAttributedValueType $value)
    {
        if ($this->givenNames === null) {
                        $this->givenNames = array();
        }

        if (!is_array($this->givenNames)) {
            $this->givenNames = array($this->givenNames);
        }

        $this->givenNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getGivenNames()
    {
        return $this->givenNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setGivenNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->givenNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addMiddleNames(StringAttributedValueType $value)
    {
        if ($this->middleNames === null) {
                        $this->middleNames = array();
        }

        if (!is_array($this->middleNames)) {
            $this->middleNames = array($this->middleNames);
        }

        $this->middleNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getMiddleNames()
    {
        return $this->middleNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setMiddleNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->middleNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addSurnames(StringAttributedValueType $value)
    {
        if ($this->surnames === null) {
                        $this->surnames = array();
        }

        if (!is_array($this->surnames)) {
            $this->surnames = array($this->surnames);
        }

        $this->surnames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getSurnames()
    {
        return $this->surnames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setSurnames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->surnames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addGenerations(StringAttributedValueType $value)
    {
        if ($this->generations === null) {
                        $this->generations = array();
        }

        if (!is_array($this->generations)) {
            $this->generations = array($this->generations);
        }

        $this->generations[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getGenerations()
    {
        return $this->generations;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setGenerations(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->generations = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addNicknames(StringAttributedValueType $value)
    {
        if ($this->nicknames === null) {
                        $this->nicknames = array();
        }

        if (!is_array($this->nicknames)) {
            $this->nicknames = array($this->nicknames);
        }

        $this->nicknames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getNicknames()
    {
        return $this->nicknames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setNicknames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->nicknames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addInitials(StringAttributedValueType $value)
    {
        if ($this->initials === null) {
                        $this->initials = array();
        }

        if (!is_array($this->initials)) {
            $this->initials = array($this->initials);
        }

        $this->initials[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setInitials(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->initials = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addYomiCompanyNames(StringAttributedValueType $value)
    {
        if ($this->yomiCompanyNames === null) {
                        $this->yomiCompanyNames = array();
        }

        if (!is_array($this->yomiCompanyNames)) {
            $this->yomiCompanyNames = array($this->yomiCompanyNames);
        }

        $this->yomiCompanyNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getYomiCompanyNames()
    {
        return $this->yomiCompanyNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setYomiCompanyNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->yomiCompanyNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addYomiFirstNames(StringAttributedValueType $value)
    {
        if ($this->yomiFirstNames === null) {
                        $this->yomiFirstNames = array();
        }

        if (!is_array($this->yomiFirstNames)) {
            $this->yomiFirstNames = array($this->yomiFirstNames);
        }

        $this->yomiFirstNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getYomiFirstNames()
    {
        return $this->yomiFirstNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setYomiFirstNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->yomiFirstNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addYomiLastNames(StringAttributedValueType $value)
    {
        if ($this->yomiLastNames === null) {
                        $this->yomiLastNames = array();
        }

        if (!is_array($this->yomiLastNames)) {
            $this->yomiLastNames = array($this->yomiLastNames);
        }

        $this->yomiLastNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getYomiLastNames()
    {
        return $this->yomiLastNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setYomiLastNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->yomiLastNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addBusinessPhoneNumbers(PhoneNumberAttributedValueType $value)
    {
        if ($this->businessPhoneNumbers === null) {
                        $this->businessPhoneNumbers = array();
        }

        if (!is_array($this->businessPhoneNumbers)) {
            $this->businessPhoneNumbers = array($this->businessPhoneNumbers);
        }

        $this->businessPhoneNumbers[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getBusinessPhoneNumbers()
    {
        return $this->businessPhoneNumbers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setBusinessPhoneNumbers(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->businessPhoneNumbers = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addBusinessPhoneNumbers2(PhoneNumberAttributedValueType $value)
    {
        if ($this->businessPhoneNumbers2 === null) {
                        $this->businessPhoneNumbers2 = array();
        }

        if (!is_array($this->businessPhoneNumbers2)) {
            $this->businessPhoneNumbers2 = array($this->businessPhoneNumbers2);
        }

        $this->businessPhoneNumbers2[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getBusinessPhoneNumbers2()
    {
        return $this->businessPhoneNumbers2;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setBusinessPhoneNumbers2(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->businessPhoneNumbers2 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addHomePhones(PhoneNumberAttributedValueType $value)
    {
        if ($this->homePhones === null) {
                        $this->homePhones = array();
        }

        if (!is_array($this->homePhones)) {
            $this->homePhones = array($this->homePhones);
        }

        $this->homePhones[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getHomePhones()
    {
        return $this->homePhones;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setHomePhones(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->homePhones = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addHomePhones2(PhoneNumberAttributedValueType $value)
    {
        if ($this->homePhones2 === null) {
                        $this->homePhones2 = array();
        }

        if (!is_array($this->homePhones2)) {
            $this->homePhones2 = array($this->homePhones2);
        }

        $this->homePhones2[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getHomePhones2()
    {
        return $this->homePhones2;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setHomePhones2(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->homePhones2 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addMobilePhones(PhoneNumberAttributedValueType $value)
    {
        if ($this->mobilePhones === null) {
                        $this->mobilePhones = array();
        }

        if (!is_array($this->mobilePhones)) {
            $this->mobilePhones = array($this->mobilePhones);
        }

        $this->mobilePhones[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getMobilePhones()
    {
        return $this->mobilePhones;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setMobilePhones(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->mobilePhones = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addMobilePhones2(PhoneNumberAttributedValueType $value)
    {
        if ($this->mobilePhones2 === null) {
                        $this->mobilePhones2 = array();
        }

        if (!is_array($this->mobilePhones2)) {
            $this->mobilePhones2 = array($this->mobilePhones2);
        }

        $this->mobilePhones2[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getMobilePhones2()
    {
        return $this->mobilePhones2;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setMobilePhones2(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->mobilePhones2 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addAssistantPhoneNumbers(PhoneNumberAttributedValueType $value)
    {
        if ($this->assistantPhoneNumbers === null) {
                        $this->assistantPhoneNumbers = array();
        }

        if (!is_array($this->assistantPhoneNumbers)) {
            $this->assistantPhoneNumbers = array($this->assistantPhoneNumbers);
        }

        $this->assistantPhoneNumbers[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getAssistantPhoneNumbers()
    {
        return $this->assistantPhoneNumbers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setAssistantPhoneNumbers(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->assistantPhoneNumbers = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addCallbackPhones(PhoneNumberAttributedValueType $value)
    {
        if ($this->callbackPhones === null) {
                        $this->callbackPhones = array();
        }

        if (!is_array($this->callbackPhones)) {
            $this->callbackPhones = array($this->callbackPhones);
        }

        $this->callbackPhones[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getCallbackPhones()
    {
        return $this->callbackPhones;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setCallbackPhones(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->callbackPhones = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addCarPhones(PhoneNumberAttributedValueType $value)
    {
        if ($this->carPhones === null) {
                        $this->carPhones = array();
        }

        if (!is_array($this->carPhones)) {
            $this->carPhones = array($this->carPhones);
        }

        $this->carPhones[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getCarPhones()
    {
        return $this->carPhones;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setCarPhones(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->carPhones = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addHomeFaxes(PhoneNumberAttributedValueType $value)
    {
        if ($this->homeFaxes === null) {
                        $this->homeFaxes = array();
        }

        if (!is_array($this->homeFaxes)) {
            $this->homeFaxes = array($this->homeFaxes);
        }

        $this->homeFaxes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getHomeFaxes()
    {
        return $this->homeFaxes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setHomeFaxes(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->homeFaxes = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addOrganizationMainPhones(PhoneNumberAttributedValueType $value)
    {
        if ($this->organizationMainPhones === null) {
                        $this->organizationMainPhones = array();
        }

        if (!is_array($this->organizationMainPhones)) {
            $this->organizationMainPhones = array($this->organizationMainPhones);
        }

        $this->organizationMainPhones[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getOrganizationMainPhones()
    {
        return $this->organizationMainPhones;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setOrganizationMainPhones(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->organizationMainPhones = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addOtherFaxes(PhoneNumberAttributedValueType $value)
    {
        if ($this->otherFaxes === null) {
                        $this->otherFaxes = array();
        }

        if (!is_array($this->otherFaxes)) {
            $this->otherFaxes = array($this->otherFaxes);
        }

        $this->otherFaxes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getOtherFaxes()
    {
        return $this->otherFaxes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setOtherFaxes(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->otherFaxes = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addOtherTelephones(PhoneNumberAttributedValueType $value)
    {
        if ($this->otherTelephones === null) {
                        $this->otherTelephones = array();
        }

        if (!is_array($this->otherTelephones)) {
            $this->otherTelephones = array($this->otherTelephones);
        }

        $this->otherTelephones[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getOtherTelephones()
    {
        return $this->otherTelephones;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setOtherTelephones(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->otherTelephones = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addOtherPhones2(PhoneNumberAttributedValueType $value)
    {
        if ($this->otherPhones2 === null) {
                        $this->otherPhones2 = array();
        }

        if (!is_array($this->otherPhones2)) {
            $this->otherPhones2 = array($this->otherPhones2);
        }

        $this->otherPhones2[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getOtherPhones2()
    {
        return $this->otherPhones2;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setOtherPhones2(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->otherPhones2 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addPagers(PhoneNumberAttributedValueType $value)
    {
        if ($this->pagers === null) {
                        $this->pagers = array();
        }

        if (!is_array($this->pagers)) {
            $this->pagers = array($this->pagers);
        }

        $this->pagers[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getPagers()
    {
        return $this->pagers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setPagers(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->pagers = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addRadioPhones(PhoneNumberAttributedValueType $value)
    {
        if ($this->radioPhones === null) {
                        $this->radioPhones = array();
        }

        if (!is_array($this->radioPhones)) {
            $this->radioPhones = array($this->radioPhones);
        }

        $this->radioPhones[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getRadioPhones()
    {
        return $this->radioPhones;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setRadioPhones(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->radioPhones = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addTelexNumbers(PhoneNumberAttributedValueType $value)
    {
        if ($this->telexNumbers === null) {
                        $this->telexNumbers = array();
        }

        if (!is_array($this->telexNumbers)) {
            $this->telexNumbers = array($this->telexNumbers);
        }

        $this->telexNumbers[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getTelexNumbers()
    {
        return $this->telexNumbers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setTelexNumbers(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->telexNumbers = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addTTYTDDPhoneNumbers(PhoneNumberAttributedValueType $value)
    {
        if ($this->tTYTDDPhoneNumbers === null) {
                        $this->tTYTDDPhoneNumbers = array();
        }

        if (!is_array($this->tTYTDDPhoneNumbers)) {
            $this->tTYTDDPhoneNumbers = array($this->tTYTDDPhoneNumbers);
        }

        $this->tTYTDDPhoneNumbers[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getTTYTDDPhoneNumbers()
    {
        return $this->tTYTDDPhoneNumbers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setTTYTDDPhoneNumbers(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->tTYTDDPhoneNumbers = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function addWorkFaxes(PhoneNumberAttributedValueType $value)
    {
        if ($this->workFaxes === null) {
                        $this->workFaxes = array();
        }

        if (!is_array($this->workFaxes)) {
            $this->workFaxes = array($this->workFaxes);
        }

        $this->workFaxes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberAttributedValueType[]
     */
    public function getWorkFaxes()
    {
        return $this->workFaxes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberAttributedValueType[]|PhoneNumberAttributedValueType
     * @return PersonaType
     */
    public function setWorkFaxes(array|PhoneNumberAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->workFaxes = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressAttributedValueType
     * @return PersonaType
     */
    public function addEmails1(EmailAddressAttributedValueType $value)
    {
        if ($this->emails1 === null) {
                        $this->emails1 = array();
        }

        if (!is_array($this->emails1)) {
            $this->emails1 = array($this->emails1);
        }

        $this->emails1[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressAttributedValueType[]
     */
    public function getEmails1()
    {
        return $this->emails1;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressAttributedValueType[]|EmailAddressAttributedValueType
     * @return PersonaType
     */
    public function setEmails1(array|EmailAddressAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->emails1 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressAttributedValueType
     * @return PersonaType
     */
    public function addEmails2(EmailAddressAttributedValueType $value)
    {
        if ($this->emails2 === null) {
                        $this->emails2 = array();
        }

        if (!is_array($this->emails2)) {
            $this->emails2 = array($this->emails2);
        }

        $this->emails2[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressAttributedValueType[]
     */
    public function getEmails2()
    {
        return $this->emails2;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressAttributedValueType[]|EmailAddressAttributedValueType
     * @return PersonaType
     */
    public function setEmails2(array|EmailAddressAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->emails2 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressAttributedValueType
     * @return PersonaType
     */
    public function addEmails3(EmailAddressAttributedValueType $value)
    {
        if ($this->emails3 === null) {
                        $this->emails3 = array();
        }

        if (!is_array($this->emails3)) {
            $this->emails3 = array($this->emails3);
        }

        $this->emails3[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressAttributedValueType[]
     */
    public function getEmails3()
    {
        return $this->emails3;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressAttributedValueType[]|EmailAddressAttributedValueType
     * @return PersonaType
     */
    public function setEmails3(array|EmailAddressAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->emails3 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addBusinessHomePages(StringAttributedValueType $value)
    {
        if ($this->businessHomePages === null) {
                        $this->businessHomePages = array();
        }

        if (!is_array($this->businessHomePages)) {
            $this->businessHomePages = array($this->businessHomePages);
        }

        $this->businessHomePages[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getBusinessHomePages()
    {
        return $this->businessHomePages;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setBusinessHomePages(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->businessHomePages = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addPersonalHomePages(StringAttributedValueType $value)
    {
        if ($this->personalHomePages === null) {
                        $this->personalHomePages = array();
        }

        if (!is_array($this->personalHomePages)) {
            $this->personalHomePages = array($this->personalHomePages);
        }

        $this->personalHomePages[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getPersonalHomePages()
    {
        return $this->personalHomePages;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setPersonalHomePages(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->personalHomePages = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addOfficeLocations(StringAttributedValueType $value)
    {
        if ($this->officeLocations === null) {
                        $this->officeLocations = array();
        }

        if (!is_array($this->officeLocations)) {
            $this->officeLocations = array($this->officeLocations);
        }

        $this->officeLocations[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getOfficeLocations()
    {
        return $this->officeLocations;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setOfficeLocations(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->officeLocations = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addImAddresses(StringAttributedValueType $value)
    {
        if ($this->imAddresses === null) {
                        $this->imAddresses = array();
        }

        if (!is_array($this->imAddresses)) {
            $this->imAddresses = array($this->imAddresses);
        }

        $this->imAddresses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getImAddresses()
    {
        return $this->imAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setImAddresses(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->imAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addImAddresses2(StringAttributedValueType $value)
    {
        if ($this->imAddresses2 === null) {
                        $this->imAddresses2 = array();
        }

        if (!is_array($this->imAddresses2)) {
            $this->imAddresses2 = array($this->imAddresses2);
        }

        $this->imAddresses2[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getImAddresses2()
    {
        return $this->imAddresses2;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setImAddresses2(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->imAddresses2 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addImAddresses3(StringAttributedValueType $value)
    {
        if ($this->imAddresses3 === null) {
                        $this->imAddresses3 = array();
        }

        if (!is_array($this->imAddresses3)) {
            $this->imAddresses3 = array($this->imAddresses3);
        }

        $this->imAddresses3[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getImAddresses3()
    {
        return $this->imAddresses3;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setImAddresses3(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->imAddresses3 = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PostalAddressAttributedValueType
     * @return PersonaType
     */
    public function addBusinessAddresses(PostalAddressAttributedValueType $value)
    {
        if ($this->businessAddresses === null) {
                        $this->businessAddresses = array();
        }

        if (!is_array($this->businessAddresses)) {
            $this->businessAddresses = array($this->businessAddresses);
        }

        $this->businessAddresses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PostalAddressAttributedValueType[]
     */
    public function getBusinessAddresses()
    {
        return $this->businessAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * PostalAddressAttributedValueType[]|PostalAddressAttributedValueType
     * @return PersonaType
     */
    public function setBusinessAddresses(array|PostalAddressAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->businessAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PostalAddressAttributedValueType
     * @return PersonaType
     */
    public function addHomeAddresses(PostalAddressAttributedValueType $value)
    {
        if ($this->homeAddresses === null) {
                        $this->homeAddresses = array();
        }

        if (!is_array($this->homeAddresses)) {
            $this->homeAddresses = array($this->homeAddresses);
        }

        $this->homeAddresses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PostalAddressAttributedValueType[]
     */
    public function getHomeAddresses()
    {
        return $this->homeAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * PostalAddressAttributedValueType[]|PostalAddressAttributedValueType
     * @return PersonaType
     */
    public function setHomeAddresses(array|PostalAddressAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->homeAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PostalAddressAttributedValueType
     * @return PersonaType
     */
    public function addOtherAddresses(PostalAddressAttributedValueType $value)
    {
        if ($this->otherAddresses === null) {
                        $this->otherAddresses = array();
        }

        if (!is_array($this->otherAddresses)) {
            $this->otherAddresses = array($this->otherAddresses);
        }

        $this->otherAddresses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PostalAddressAttributedValueType[]
     */
    public function getOtherAddresses()
    {
        return $this->otherAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * PostalAddressAttributedValueType[]|PostalAddressAttributedValueType
     * @return PersonaType
     */
    public function setOtherAddresses(array|PostalAddressAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->otherAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addTitles(StringAttributedValueType $value)
    {
        if ($this->titles === null) {
                        $this->titles = array();
        }

        if (!is_array($this->titles)) {
            $this->titles = array($this->titles);
        }

        $this->titles[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setTitles(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->titles = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addDepartments(StringAttributedValueType $value)
    {
        if ($this->departments === null) {
                        $this->departments = array();
        }

        if (!is_array($this->departments)) {
            $this->departments = array($this->departments);
        }

        $this->departments[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setDepartments(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->departments = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addCompanyNames(StringAttributedValueType $value)
    {
        if ($this->companyNames === null) {
                        $this->companyNames = array();
        }

        if (!is_array($this->companyNames)) {
            $this->companyNames = array($this->companyNames);
        }

        $this->companyNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getCompanyNames()
    {
        return $this->companyNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setCompanyNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->companyNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addManagers(StringAttributedValueType $value)
    {
        if ($this->managers === null) {
                        $this->managers = array();
        }

        if (!is_array($this->managers)) {
            $this->managers = array($this->managers);
        }

        $this->managers[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getManagers()
    {
        return $this->managers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setManagers(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->managers = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addAssistantNames(StringAttributedValueType $value)
    {
        if ($this->assistantNames === null) {
                        $this->assistantNames = array();
        }

        if (!is_array($this->assistantNames)) {
            $this->assistantNames = array($this->assistantNames);
        }

        $this->assistantNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getAssistantNames()
    {
        return $this->assistantNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setAssistantNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->assistantNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addProfessions(StringAttributedValueType $value)
    {
        if ($this->professions === null) {
                        $this->professions = array();
        }

        if (!is_array($this->professions)) {
            $this->professions = array($this->professions);
        }

        $this->professions[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getProfessions()
    {
        return $this->professions;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setProfessions(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->professions = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addSpouseNames(StringAttributedValueType $value)
    {
        if ($this->spouseNames === null) {
                        $this->spouseNames = array();
        }

        if (!is_array($this->spouseNames)) {
            $this->spouseNames = array($this->spouseNames);
        }

        $this->spouseNames[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getSpouseNames()
    {
        return $this->spouseNames;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setSpouseNames(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->spouseNames = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringArrayAttributedValueType
     * @return PersonaType
     */
    public function addChildren(StringArrayAttributedValueType $value)
    {
        if ($this->children === null) {
                        $this->children = array();
        }

        if (!is_array($this->children)) {
            $this->children = array($this->children);
        }

        $this->children[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringArrayAttributedValueType[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringArrayAttributedValueType[]|StringArrayAttributedValueType
     * @return PersonaType
     */
    public function setChildren(array|StringArrayAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->children = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addSchools(StringAttributedValueType $value)
    {
        if ($this->schools === null) {
                        $this->schools = array();
        }

        if (!is_array($this->schools)) {
            $this->schools = array($this->schools);
        }

        $this->schools[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getSchools()
    {
        return $this->schools;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setSchools(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->schools = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addHobbies(StringAttributedValueType $value)
    {
        if ($this->hobbies === null) {
                        $this->hobbies = array();
        }

        if (!is_array($this->hobbies)) {
            $this->hobbies = array($this->hobbies);
        }

        $this->hobbies[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setHobbies(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->hobbies = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addWeddingAnniversaries(StringAttributedValueType $value)
    {
        if ($this->weddingAnniversaries === null) {
                        $this->weddingAnniversaries = array();
        }

        if (!is_array($this->weddingAnniversaries)) {
            $this->weddingAnniversaries = array($this->weddingAnniversaries);
        }

        $this->weddingAnniversaries[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getWeddingAnniversaries()
    {
        return $this->weddingAnniversaries;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setWeddingAnniversaries(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->weddingAnniversaries = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addBirthdays(StringAttributedValueType $value)
    {
        if ($this->birthdays === null) {
                        $this->birthdays = array();
        }

        if (!is_array($this->birthdays)) {
            $this->birthdays = array($this->birthdays);
        }

        $this->birthdays[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getBirthdays()
    {
        return $this->birthdays;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setBirthdays(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->birthdays = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addLocations(StringAttributedValueType $value)
    {
        if ($this->locations === null) {
                        $this->locations = array();
        }

        if (!is_array($this->locations)) {
            $this->locations = array($this->locations);
        }

        $this->locations[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setLocations(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->locations = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addInlineLinks(StringAttributedValueType $value)
    {
        if ($this->inlineLinks === null) {
                        $this->inlineLinks = array();
        }

        if (!is_array($this->inlineLinks)) {
            $this->inlineLinks = array($this->inlineLinks);
        }

        $this->inlineLinks[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getInlineLinks()
    {
        return $this->inlineLinks;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setInlineLinks(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->inlineLinks = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringArrayAttributedValueType
     * @return PersonaType
     */
    public function addItemLinkIds(StringArrayAttributedValueType $value)
    {
        if ($this->itemLinkIds === null) {
                        $this->itemLinkIds = array();
        }

        if (!is_array($this->itemLinkIds)) {
            $this->itemLinkIds = array($this->itemLinkIds);
        }

        $this->itemLinkIds[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringArrayAttributedValueType[]
     */
    public function getItemLinkIds()
    {
        return $this->itemLinkIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringArrayAttributedValueType[]|StringArrayAttributedValueType
     * @return PersonaType
     */
    public function setItemLinkIds(array|StringArrayAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->itemLinkIds = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getHasActiveDeals()
    {
        return $this->hasActiveDeals;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setHasActiveDeals($value)
    {
        $this->hasActiveDeals = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getIsBusinessContact()
    {
        return $this->isBusinessContact;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setIsBusinessContact($value)
    {
        $this->isBusinessContact = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addAttributedHasActiveDeals(StringAttributedValueType $value)
    {
        if ($this->attributedHasActiveDeals === null) {
                        $this->attributedHasActiveDeals = array();
        }

        if (!is_array($this->attributedHasActiveDeals)) {
            $this->attributedHasActiveDeals = array($this->attributedHasActiveDeals);
        }

        $this->attributedHasActiveDeals[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getAttributedHasActiveDeals()
    {
        return $this->attributedHasActiveDeals;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setAttributedHasActiveDeals(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->attributedHasActiveDeals = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addAttributedIsBusinessContact(StringAttributedValueType $value)
    {
        if ($this->attributedIsBusinessContact === null) {
                        $this->attributedIsBusinessContact = array();
        }

        if (!is_array($this->attributedIsBusinessContact)) {
            $this->attributedIsBusinessContact = array($this->attributedIsBusinessContact);
        }

        $this->attributedIsBusinessContact[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getAttributedIsBusinessContact()
    {
        return $this->attributedIsBusinessContact;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setAttributedIsBusinessContact(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->attributedIsBusinessContact = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType
     * @return PersonaType
     */
    public function addSourceMailboxGuids(StringAttributedValueType $value)
    {
        if ($this->sourceMailboxGuids === null) {
                        $this->sourceMailboxGuids = array();
        }

        if (!is_array($this->sourceMailboxGuids)) {
            $this->sourceMailboxGuids = array($this->sourceMailboxGuids);
        }

        $this->sourceMailboxGuids[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return StringAttributedValueType[]
     */
    public function getSourceMailboxGuids()
    {
        return $this->sourceMailboxGuids;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value StringAttributedValueType[]|StringAttributedValueType
     * @return PersonaType
     */
    public function setSourceMailboxGuids(array|StringAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->sourceMailboxGuids = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getLastContactedDate()
    {
        return $this->lastContactedDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return PersonaType
     */
    public function setLastContactedDate(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->lastContactedDate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExtendedPropertyAttributedValueType
     * @return PersonaType
     */
    public function addExtendedProperties(ExtendedPropertyAttributedValueType $value)
    {
        if ($this->extendedProperties === null) {
                        $this->extendedProperties = array();
        }

        if (!is_array($this->extendedProperties)) {
            $this->extendedProperties = array($this->extendedProperties);
        }

        $this->extendedProperties[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ExtendedPropertyAttributedValueType[]
     */
    public function getExtendedProperties()
    {
        return $this->extendedProperties;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * ExtendedPropertyAttributedValueType[]|ExtendedPropertyAttributedValueType
     * @return PersonaType
     */
    public function setExtendedProperties(array|ExtendedPropertyAttributedValueType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->extendedProperties = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getExternalDirectoryObjectId()
    {
        return $this->externalDirectoryObjectId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setExternalDirectoryObjectId($value)
    {
        $this->externalDirectoryObjectId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMapiEntryId()
    {
        return $this->mapiEntryId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setMapiEntryId($value)
    {
        $this->mapiEntryId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMapiEmailAddress()
    {
        return $this->mapiEmailAddress;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setMapiEmailAddress($value)
    {
        $this->mapiEmailAddress = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMapiAddressType()
    {
        return $this->mapiAddressType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setMapiAddressType($value)
    {
        $this->mapiAddressType = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMapiSearchKey()
    {
        return $this->mapiSearchKey;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setMapiSearchKey($value)
    {
        $this->mapiSearchKey = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMapiTransmittableDisplayName()
    {
        return $this->mapiTransmittableDisplayName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PersonaType
     */
    public function setMapiTransmittableDisplayName($value)
    {
        $this->mapiTransmittableDisplayName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isMapiSendRichInfo()
    {
        return ((bool) $this->mapiSendRichInfo);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getMapiSendRichInfo()
    {
        return $this->mapiSendRichInfo;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return PersonaType
     */
    public function setMapiSendRichInfo($value)
    {
        $this->mapiSendRichInfo = $value;
        return $this;
    }
}
