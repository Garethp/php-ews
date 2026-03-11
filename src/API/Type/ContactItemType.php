<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ContactItemType
 *
 *
 * XSD Type: ContactItemType
 */
class ContactItemType extends ItemType
{

    /**
     * @var string
     */
    protected $fileAs = null;

    /**
     * @var string
     */
    protected $fileAsMapping = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var string
     */
    protected $givenName = null;

    /**
     * @var string
     */
    protected $initials = null;

    /**
     * @var string
     */
    protected $middleName = null;

    /**
     * @var string
     */
    protected $nickname = null;

    /**
     * @var \garethp\ews\API\Type\CompleteNameType
     */
    protected $completeName = null;

    /**
     * @var string
     */
    protected $companyName = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressDictionaryEntryType[]
     */
    protected $emailAddresses = null;

    /**
     * @var \garethp\ews\API\Type\PhysicalAddressDictionaryEntryType[]
     */
    protected $physicalAddresses = null;

    /**
     * @var \garethp\ews\API\Type\PhoneNumberDictionaryEntryType[]
     */
    protected $phoneNumbers = null;

    /**
     * @var string
     */
    protected $assistantName = null;

    /**
     * @var \DateTime
     */
    protected $birthday = null;

    /**
     * @var string
     */
    protected $businessHomePage = null;

    /**
     * @var string[]
     */
    protected $children = null;

    /**
     * @var string[]
     */
    protected $companies = null;

    /**
     * @var string
     */
    protected $contactSource = null;

    /**
     * @var string
     */
    protected $department = null;

    /**
     * @var string
     */
    protected $generation = null;

    /**
     * @var \garethp\ews\API\Type\ImAddressDictionaryEntryType[]
     */
    protected $imAddresses = null;

    /**
     * @var string
     */
    protected $jobTitle = null;

    /**
     * @var string
     */
    protected $manager = null;

    /**
     * @var string
     */
    protected $mileage = null;

    /**
     * @var string
     */
    protected $officeLocation = null;

    /**
     * @var string
     */
    protected $postalAddressIndex = null;

    /**
     * @var string
     */
    protected $profession = null;

    /**
     * @var string
     */
    protected $spouseName = null;

    /**
     * @var string
     */
    protected $surname = null;

    /**
     * @var \DateTime
     */
    protected $weddingAnniversary = null;

    /**
     * @var boolean
     */
    protected $hasPicture = null;

    /**
     * @var string
     */
    protected $phoneticFullName = null;

    /**
     * @var string
     */
    protected $phoneticFirstName = null;

    /**
     * @var string
     */
    protected $phoneticLastName = null;

    /**
     * @var string
     */
    protected $alias = null;

    /**
     * @var string
     */
    protected $notes = null;

    /**
     * @var string
     */
    protected $photo = null;

    /**
     * @var string[]
     */
    protected $userSMIMECertificate = null;

    /**
     * @var string[]
     */
    protected $mSExchangeCertificate = null;

    /**
     * @var string
     */
    protected $directoryId = null;

    /**
     * @var \garethp\ews\API\Type\SingleRecipientType
     */
    protected $managerMailbox = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $directReports = null;

    /**
     * @var \garethp\ews\API\Type\AbchEmailAddressDictionaryEntryType[]
     */
    protected $abchEmailAddresses = null;

    /**
     * @var string
     */
    protected $accountName = null;

    /**
     * @var boolean
     */
    protected $isAutoUpdateDisabled = null;

    /**
     * @var boolean
     */
    protected $isMessengerEnabled = null;

    /**
     * @var string
     */
    protected $comment = null;

    /**
     * @var integer
     */
    protected $contactShortId = null;

    /**
     * @var string
     */
    protected $contactType = null;

    /**
     * @var string
     */
    protected $gender = null;

    /**
     * @var boolean
     */
    protected $isHidden = null;

    /**
     * @var string
     */
    protected $objectId = null;

    /**
     * @var integer
     */
    protected $passportId = null;

    /**
     * @var boolean
     */
    protected $isPrivate = null;

    /**
     * @var string
     */
    protected $sourceId = null;

    /**
     * @var integer
     */
    protected $trustLevel = null;

    /**
     * @var string
     */
    protected $createdBy = null;

    /**
     * @var \garethp\ews\API\Type\ContactUrlDictionaryEntryType[]
     */
    protected $urls = null;

    /**
     * @var integer
     */
    protected $cid = null;

    /**
     * @var string
     */
    protected $skypeAuthCertificate = null;

    /**
     * @var string
     */
    protected $skypeContext = null;

    /**
     * @var string
     */
    protected $skypeId = null;

    /**
     * @var string
     */
    protected $skypeRelationship = null;

    /**
     * @var string
     */
    protected $yomiNickname = null;

    /**
     * @var string
     */
    protected $xboxLiveTag = null;

    /**
     * @var boolean
     */
    protected $inviteFree = null;

    /**
     * @var boolean
     */
    protected $hidePresenceAndProfile = null;

    /**
     * @var boolean
     */
    protected $isPendingOutbound = null;

    /**
     * @var boolean
     */
    protected $supportGroupFeeds = null;

    /**
     * @var string
     */
    protected $userTileHash = null;

    /**
     * @var boolean
     */
    protected $unifiedInbox = null;

    /**
     * @var string[]
     */
    protected $mris = null;

    /**
     * @var string
     */
    protected $wlid = null;

    /**
     * @var string
     */
    protected $abchContactId = null;

    /**
     * @var boolean
     */
    protected $notInBirthdayCalendar = null;

    /**
     * @var string
     */
    protected $shellContactType = null;

    /**
     * @var string
     */
    protected $imMri = null;

    /**
     * @var integer
     */
    protected $presenceTrustLevel = null;

    /**
     * @var string
     */
    protected $otherMri = null;

    /**
     * @var string
     */
    protected $profileLastChanged = null;

    /**
     * @var boolean
     */
    protected $mobileIMEnabled = null;

    /**
     * @var string
     */
    protected $partnerNetworkProfilePhotoUrl = null;

    /**
     * @var string
     */
    protected $partnerNetworkThumbnailPhotoUrl = null;

    /**
     * @var string
     */
    protected $personId = null;

    /**
     * @var string
     */
    protected $conversationGuid = null;

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
     * @return ContactItemType
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
    public function getFileAsMapping()
    {
        return $this->fileAsMapping;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setFileAsMapping($value)
    {
        $this->fileAsMapping = $value;
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
     * @return ContactItemType
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
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
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
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setInitials($value)
    {
        $this->initials = $value;
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
     * @return ContactItemType
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
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setNickname($value)
    {
        $this->nickname = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return CompleteNameType
     */
    public function getCompleteName()
    {
        return $this->completeName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CompleteNameType
     * @return ContactItemType
     */
    public function setCompleteName(CompleteNameType $value)
    {
        $this->completeName = $value;
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
     * @return ContactItemType
     */
    public function setCompanyName($value)
    {
        $this->companyName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function addEmailAddresses(EmailAddressDictionaryEntryType $value)
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
     * @return EmailAddressDictionaryEntryType[]
     */
    public function getEmailAddresses()
    {
        return $this->emailAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressDictionaryEntryType[]|EmailAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function setEmailAddresses(array|EmailAddressDictionaryEntryType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->emailAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AbchEmailAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function addAbchEmailAddresses(AbchEmailAddressDictionaryEntryType $value)
    {
        if ($this->abchEmailAddresses === null) {
                        $this->abchEmailAddresses = array();
        }

        if (!is_array($this->abchEmailAddresses)) {
            $this->abchEmailAddresses = array($this->abchEmailAddresses);
        }

        $this->abchEmailAddresses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AbchEmailAddressDictionaryEntryType[]
     */
    public function getAbchEmailAddresses()
    {
        return $this->abchEmailAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * AbchEmailAddressDictionaryEntryType[]|AbchEmailAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function setAbchEmailAddresses(array|AbchEmailAddressDictionaryEntryType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->abchEmailAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhysicalAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function addPhysicalAddresses(PhysicalAddressDictionaryEntryType $value)
    {
        if ($this->physicalAddresses === null) {
                        $this->physicalAddresses = array();
        }

        if (!is_array($this->physicalAddresses)) {
            $this->physicalAddresses = array($this->physicalAddresses);
        }

        $this->physicalAddresses[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhysicalAddressDictionaryEntryType[]
     */
    public function getPhysicalAddresses()
    {
        return $this->physicalAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * PhysicalAddressDictionaryEntryType[]|PhysicalAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function setPhysicalAddresses(array|PhysicalAddressDictionaryEntryType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->physicalAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberDictionaryEntryType
     * @return ContactItemType
     */
    public function addPhoneNumbers(PhoneNumberDictionaryEntryType $value)
    {
        if ($this->phoneNumbers === null) {
                        $this->phoneNumbers = array();
        }

        if (!is_array($this->phoneNumbers)) {
            $this->phoneNumbers = array($this->phoneNumbers);
        }

        $this->phoneNumbers[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PhoneNumberDictionaryEntryType[]
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberDictionaryEntryType[]|PhoneNumberDictionaryEntryType
     * @return ContactItemType
     */
    public function setPhoneNumbers(array|PhoneNumberDictionaryEntryType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->phoneNumbers = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getAssistantName()
    {
        return $this->assistantName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setAssistantName($value)
    {
        $this->assistantName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ContactItemType
     */
    public function setBirthday(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->birthday = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getBusinessHomePage()
    {
        return $this->businessHomePage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setBusinessHomePage($value)
    {
        $this->businessHomePage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function addChildren($value)
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
     * @return string[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ContactItemType
     */
    public function setChildren(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->children = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function addCompanies($value)
    {
        if ($this->companies === null) {
                        $this->companies = array();
        }

        if (!is_array($this->companies)) {
            $this->companies = array($this->companies);
        }

        $this->companies[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ContactItemType
     */
    public function setCompanies(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->companies = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getContactSource()
    {
        return $this->contactSource;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setContactSource($value)
    {
        $this->contactSource = $value;
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
     * @return ContactItemType
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
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setGeneration($value)
    {
        $this->generation = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ImAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function addImAddresses(ImAddressDictionaryEntryType $value)
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
     * @return ImAddressDictionaryEntryType[]
     */
    public function getImAddresses()
    {
        return $this->imAddresses;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ImAddressDictionaryEntryType[]|ImAddressDictionaryEntryType
     * @return ContactItemType
     */
    public function setImAddresses(array|ImAddressDictionaryEntryType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->imAddresses = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setJobTitle($value)
    {
        $this->jobTitle = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setManager($value)
    {
        $this->manager = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setMileage($value)
    {
        $this->mileage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getOfficeLocation()
    {
        return $this->officeLocation;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setOfficeLocation($value)
    {
        $this->officeLocation = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPostalAddressIndex()
    {
        return $this->postalAddressIndex;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPostalAddressIndex($value)
    {
        $this->postalAddressIndex = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setProfession($value)
    {
        $this->profession = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSpouseName()
    {
        return $this->spouseName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSpouseName($value)
    {
        $this->spouseName = $value;
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
     * @return ContactItemType
     */
    public function setSurname($value)
    {
        $this->surname = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getWeddingAnniversary()
    {
        return $this->weddingAnniversary;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ContactItemType
     */
    public function setWeddingAnniversary(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->weddingAnniversary = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isHasPicture()
    {
        return ((bool) $this->hasPicture);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getHasPicture()
    {
        return $this->hasPicture;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setHasPicture($value)
    {
        $this->hasPicture = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPhoneticFullName()
    {
        return $this->phoneticFullName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoneticFullName($value)
    {
        $this->phoneticFullName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPhoneticFirstName()
    {
        return $this->phoneticFirstName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoneticFirstName($value)
    {
        $this->phoneticFirstName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPhoneticLastName()
    {
        return $this->phoneticLastName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoneticLastName($value)
    {
        $this->phoneticLastName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setAlias($value)
    {
        $this->alias = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setNotes($value)
    {
        $this->notes = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoto($value)
    {
        $this->photo = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function addUserSMIMECertificate($value)
    {
        if ($this->userSMIMECertificate === null) {
                        $this->userSMIMECertificate = array();
        }

        if (!is_array($this->userSMIMECertificate)) {
            $this->userSMIMECertificate = array($this->userSMIMECertificate);
        }

        $this->userSMIMECertificate[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getUserSMIMECertificate()
    {
        return $this->userSMIMECertificate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ContactItemType
     */
    public function setUserSMIMECertificate(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->userSMIMECertificate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function addMSExchangeCertificate($value)
    {
        if ($this->mSExchangeCertificate === null) {
                        $this->mSExchangeCertificate = array();
        }

        if (!is_array($this->mSExchangeCertificate)) {
            $this->mSExchangeCertificate = array($this->mSExchangeCertificate);
        }

        $this->mSExchangeCertificate[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getMSExchangeCertificate()
    {
        return $this->mSExchangeCertificate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ContactItemType
     */
    public function setMSExchangeCertificate(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->mSExchangeCertificate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDirectoryId()
    {
        return $this->directoryId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setDirectoryId($value)
    {
        $this->directoryId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SingleRecipientType
     */
    public function getManagerMailbox()
    {
        return $this->managerMailbox;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SingleRecipientType
     * @return ContactItemType
     */
    public function setManagerMailbox(SingleRecipientType $value)
    {
        $this->managerMailbox = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType
     * @return ContactItemType
     */
    public function addDirectReports(EmailAddressType $value)
    {
        if ($this->directReports === null) {
                        $this->directReports = array();
        }

        if (!is_array($this->directReports)) {
            $this->directReports = array($this->directReports);
        }

        $this->directReports[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return EmailAddressType[]
     */
    public function getDirectReports()
    {
        return $this->directReports;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]|EmailAddressType
     * @return ContactItemType
     */
    public function setDirectReports(array|EmailAddressType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->directReports = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setAccountName($value)
    {
        $this->accountName = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isAutoUpdateDisabled()
    {
        return ((bool) $this->isAutoUpdateDisabled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsAutoUpdateDisabled()
    {
        return $this->isAutoUpdateDisabled;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setIsAutoUpdateDisabled($value)
    {
        $this->isAutoUpdateDisabled = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isMessengerEnabled()
    {
        return ((bool) $this->isMessengerEnabled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsMessengerEnabled()
    {
        return $this->isMessengerEnabled;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setIsMessengerEnabled($value)
    {
        $this->isMessengerEnabled = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setComment($value)
    {
        $this->comment = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getContactShortId()
    {
        return $this->contactShortId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ContactItemType
     */
    public function setContactShortId($value)
    {
        $this->contactShortId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setContactType($value)
    {
        $this->contactType = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setGender($value)
    {
        $this->gender = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isHidden()
    {
        return ((bool) $this->isHidden);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsHidden()
    {
        return $this->isHidden;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setIsHidden($value)
    {
        $this->isHidden = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setObjectId($value)
    {
        $this->objectId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getPassportId()
    {
        return $this->passportId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ContactItemType
     */
    public function setPassportId($value)
    {
        $this->passportId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isPrivate()
    {
        return ((bool) $this->isPrivate);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setIsPrivate($value)
    {
        $this->isPrivate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSourceId($value)
    {
        $this->sourceId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getTrustLevel()
    {
        return $this->trustLevel;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ContactItemType
     */
    public function setTrustLevel($value)
    {
        $this->trustLevel = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setCreatedBy($value)
    {
        $this->createdBy = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactUrlDictionaryEntryType
     * @return ContactItemType
     */
    public function addUrls(ContactUrlDictionaryEntryType $value)
    {
        if ($this->urls === null) {
                        $this->urls = array();
        }

        if (!is_array($this->urls)) {
            $this->urls = array($this->urls);
        }

        $this->urls[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ContactUrlDictionaryEntryType[]
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactUrlDictionaryEntryType[]|ContactUrlDictionaryEntryType
     * @return ContactItemType
     */
    public function setUrls(array|ContactUrlDictionaryEntryType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->urls = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ContactItemType
     */
    public function setCid($value)
    {
        $this->cid = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSkypeAuthCertificate()
    {
        return $this->skypeAuthCertificate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSkypeAuthCertificate($value)
    {
        $this->skypeAuthCertificate = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSkypeContext()
    {
        return $this->skypeContext;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSkypeContext($value)
    {
        $this->skypeContext = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSkypeId()
    {
        return $this->skypeId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSkypeId($value)
    {
        $this->skypeId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSkypeRelationship()
    {
        return $this->skypeRelationship;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSkypeRelationship($value)
    {
        $this->skypeRelationship = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getYomiNickname()
    {
        return $this->yomiNickname;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setYomiNickname($value)
    {
        $this->yomiNickname = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getXboxLiveTag()
    {
        return $this->xboxLiveTag;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setXboxLiveTag($value)
    {
        $this->xboxLiveTag = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isInviteFree()
    {
        return ((bool) $this->inviteFree);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getInviteFree()
    {
        return $this->inviteFree;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setInviteFree($value)
    {
        $this->inviteFree = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isHidePresenceAndProfile()
    {
        return ((bool) $this->hidePresenceAndProfile);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getHidePresenceAndProfile()
    {
        return $this->hidePresenceAndProfile;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setHidePresenceAndProfile($value)
    {
        $this->hidePresenceAndProfile = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isPendingOutbound()
    {
        return ((bool) $this->isPendingOutbound);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsPendingOutbound()
    {
        return $this->isPendingOutbound;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setIsPendingOutbound($value)
    {
        $this->isPendingOutbound = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isSupportGroupFeeds()
    {
        return ((bool) $this->supportGroupFeeds);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getSupportGroupFeeds()
    {
        return $this->supportGroupFeeds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setSupportGroupFeeds($value)
    {
        $this->supportGroupFeeds = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getUserTileHash()
    {
        return $this->userTileHash;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setUserTileHash($value)
    {
        $this->userTileHash = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isUnifiedInbox()
    {
        return ((bool) $this->unifiedInbox);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getUnifiedInbox()
    {
        return $this->unifiedInbox;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setUnifiedInbox($value)
    {
        $this->unifiedInbox = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function addMris($value)
    {
        if ($this->mris === null) {
                        $this->mris = array();
        }

        if (!is_array($this->mris)) {
            $this->mris = array($this->mris);
        }

        $this->mris[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getMris()
    {
        return $this->mris;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]|string
     * @return ContactItemType
     */
    public function setMris(array|string $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->mris = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getWlid()
    {
        return $this->wlid;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setWlid($value)
    {
        $this->wlid = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getAbchContactId()
    {
        return $this->abchContactId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setAbchContactId($value)
    {
        $this->abchContactId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isNotInBirthdayCalendar()
    {
        return ((bool) $this->notInBirthdayCalendar);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getNotInBirthdayCalendar()
    {
        return $this->notInBirthdayCalendar;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setNotInBirthdayCalendar($value)
    {
        $this->notInBirthdayCalendar = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getShellContactType()
    {
        return $this->shellContactType;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setShellContactType($value)
    {
        $this->shellContactType = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getImMri()
    {
        return $this->imMri;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setImMri($value)
    {
        $this->imMri = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getPresenceTrustLevel()
    {
        return $this->presenceTrustLevel;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ContactItemType
     */
    public function setPresenceTrustLevel($value)
    {
        $this->presenceTrustLevel = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getOtherMri()
    {
        return $this->otherMri;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setOtherMri($value)
    {
        $this->otherMri = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getProfileLastChanged()
    {
        return $this->profileLastChanged;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setProfileLastChanged($value)
    {
        $this->profileLastChanged = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isMobileIMEnabled()
    {
        return ((bool) $this->mobileIMEnabled);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getMobileIMEnabled()
    {
        return $this->mobileIMEnabled;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setMobileIMEnabled($value)
    {
        $this->mobileIMEnabled = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPartnerNetworkProfilePhotoUrl()
    {
        return $this->partnerNetworkProfilePhotoUrl;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPartnerNetworkProfilePhotoUrl($value)
    {
        $this->partnerNetworkProfilePhotoUrl = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPartnerNetworkThumbnailPhotoUrl()
    {
        return $this->partnerNetworkThumbnailPhotoUrl;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPartnerNetworkThumbnailPhotoUrl($value)
    {
        $this->partnerNetworkThumbnailPhotoUrl = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPersonId($value)
    {
        $this->personId = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getConversationGuid()
    {
        return $this->conversationGuid;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setConversationGuid($value)
    {
        $this->conversationGuid = $value;
        return $this;
    }
}
