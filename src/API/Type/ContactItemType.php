<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ContactItemType
 *
 *
 * XSD Type: ContactItemType
 *
 * @method ContactItemType addEmailAddresses(EmailAddressDictionaryEntryType $emailAddresses)
 * @method ContactItemType addPhysicalAddresses(PhysicalAddressDictionaryEntryType $physicalAddresses)
 * @method ContactItemType addPhoneNumbers(PhoneNumberDictionaryEntryType $phoneNumbers)
 * @method ContactItemType addChildren(string $children)
 * @method ContactItemType addCompanies(string $companies)
 * @method ContactItemType addImAddresses(ImAddressDictionaryEntryType $imAddresses)
 * @method ContactItemType addUserSMIMECertificate(string $userSMIMECertificate)
 * @method ContactItemType addMSExchangeCertificate(string $mSExchangeCertificate)
 * @method ContactItemType addDirectReports(EmailAddressType $directReports)
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

    protected $_typeMap = array(
        'birthday' => 'dateTime',
        'weddingAnniversary' => 'dateTime',
    );

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
     * @return string
     */
    public function getFileAs()
    {
        return $this->fileAs;
    }

    /**
     * @return string
     */
    public function getFileAsMapping()
    {
        return $this->fileAsMapping;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return CompleteNameType
     */
    public function getCompleteName()
    {
        return $this->completeName;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return EmailAddressDictionaryEntryType[]
     */
    public function getEmailAddresses()
    {
        return $this->emailAddresses;
    }

    /**
     * @return PhysicalAddressDictionaryEntryType[]
     */
    public function getPhysicalAddresses()
    {
        return $this->physicalAddresses;
    }

    /**
     * @return PhoneNumberDictionaryEntryType[]
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @return string
     */
    public function getAssistantName()
    {
        return $this->assistantName;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return string
     */
    public function getBusinessHomePage()
    {
        return $this->businessHomePage;
    }

    /**
     * @return string[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return string[]
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @return string
     */
    public function getContactSource()
    {
        return $this->contactSource;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * @return ImAddressDictionaryEntryType[]
     */
    public function getImAddresses()
    {
        return $this->imAddresses;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @return string
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @return string
     */
    public function getOfficeLocation()
    {
        return $this->officeLocation;
    }

    /**
     * @return string
     */
    public function getPostalAddressIndex()
    {
        return $this->postalAddressIndex;
    }

    /**
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @return string
     */
    public function getSpouseName()
    {
        return $this->spouseName;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return \DateTime
     */
    public function getWeddingAnniversary()
    {
        return $this->weddingAnniversary;
    }

    /**
     * @return boolean
     */
    public function getHasPicture()
    {
        return $this->hasPicture;
    }

    /**
     * @return string
     */
    public function getPhoneticFullName()
    {
        return $this->phoneticFullName;
    }

    /**
     * @return string
     */
    public function getPhoneticFirstName()
    {
        return $this->phoneticFirstName;
    }

    /**
     * @return string
     */
    public function getPhoneticLastName()
    {
        return $this->phoneticLastName;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return string[]
     */
    public function getUserSMIMECertificate()
    {
        return $this->userSMIMECertificate;
    }

    /**
     * @return string[]
     */
    public function getMSExchangeCertificate()
    {
        return $this->mSExchangeCertificate;
    }

    /**
     * @return string
     */
    public function getDirectoryId()
    {
        return $this->directoryId;
    }

    /**
     * @return SingleRecipientType
     */
    public function getManagerMailbox()
    {
        return $this->managerMailbox;
    }

    /**
     * @return EmailAddressType[]
     */
    public function getDirectReports()
    {
        return $this->directReports;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setFileAs($value)
    {
        $this->fileAs = $this->castValueIfNeeded("fileAs", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setFileAsMapping($value)
    {
        $this->fileAsMapping = $this->castValueIfNeeded("fileAsMapping", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setDisplayName($value)
    {
        $this->displayName = $this->castValueIfNeeded("displayName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setGivenName($value)
    {
        $this->givenName = $this->castValueIfNeeded("givenName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setInitials($value)
    {
        $this->initials = $this->castValueIfNeeded("initials", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setMiddleName($value)
    {
        $this->middleName = $this->castValueIfNeeded("middleName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setNickname($value)
    {
        $this->nickname = $this->castValueIfNeeded("nickname", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CompleteNameType
     * @return ContactItemType
     */
    public function setCompleteName(CompleteNameType $value)
    {
        $this->completeName = $this->castValueIfNeeded("completeName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setCompanyName($value)
    {
        $this->companyName = $this->castValueIfNeeded("companyName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressDictionaryEntryType[]
     * @return ContactItemType
     */
    public function setEmailAddresses(array $value)
    {
        $this->emailAddresses = $this->castValueIfNeeded("emailAddresses", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhysicalAddressDictionaryEntryType[]
     * @return ContactItemType
     */
    public function setPhysicalAddresses(array $value)
    {
        $this->physicalAddresses = $this->castValueIfNeeded("physicalAddresses", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PhoneNumberDictionaryEntryType[]
     * @return ContactItemType
     */
    public function setPhoneNumbers(array $value)
    {
        $this->phoneNumbers = $this->castValueIfNeeded("phoneNumbers", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setAssistantName($value)
    {
        $this->assistantName = $this->castValueIfNeeded("assistantName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ContactItemType
     */
    public function setBirthday(\DateTime|string $value)
    {
        $this->birthday = $this->castValueIfNeeded("birthday", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setBusinessHomePage($value)
    {
        $this->businessHomePage = $this->castValueIfNeeded("businessHomePage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ContactItemType
     */
    public function setChildren(array $value)
    {
        $this->children = $this->castValueIfNeeded("children", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ContactItemType
     */
    public function setCompanies(array $value)
    {
        $this->companies = $this->castValueIfNeeded("companies", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setContactSource($value)
    {
        $this->contactSource = $this->castValueIfNeeded("contactSource", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setDepartment($value)
    {
        $this->department = $this->castValueIfNeeded("department", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setGeneration($value)
    {
        $this->generation = $this->castValueIfNeeded("generation", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ImAddressDictionaryEntryType[]
     * @return ContactItemType
     */
    public function setImAddresses(array $value)
    {
        $this->imAddresses = $this->castValueIfNeeded("imAddresses", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setJobTitle($value)
    {
        $this->jobTitle = $this->castValueIfNeeded("jobTitle", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setManager($value)
    {
        $this->manager = $this->castValueIfNeeded("manager", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setMileage($value)
    {
        $this->mileage = $this->castValueIfNeeded("mileage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setOfficeLocation($value)
    {
        $this->officeLocation = $this->castValueIfNeeded("officeLocation", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPostalAddressIndex($value)
    {
        $this->postalAddressIndex = $this->castValueIfNeeded("postalAddressIndex", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setProfession($value)
    {
        $this->profession = $this->castValueIfNeeded("profession", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSpouseName($value)
    {
        $this->spouseName = $this->castValueIfNeeded("spouseName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setSurname($value)
    {
        $this->surname = $this->castValueIfNeeded("surname", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return ContactItemType
     */
    public function setWeddingAnniversary(\DateTime|string $value)
    {
        $this->weddingAnniversary = $this->castValueIfNeeded("weddingAnniversary", $value);
        return $this;
    }

    /**
     * @returns bool
     */
    public function isHasPicture()
    {
        return ((bool) $this->hasPicture);
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ContactItemType
     */
    public function setHasPicture($value)
    {
        $this->hasPicture = $this->castValueIfNeeded("hasPicture", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoneticFullName($value)
    {
        $this->phoneticFullName = $this->castValueIfNeeded("phoneticFullName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoneticFirstName($value)
    {
        $this->phoneticFirstName = $this->castValueIfNeeded("phoneticFirstName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoneticLastName($value)
    {
        $this->phoneticLastName = $this->castValueIfNeeded("phoneticLastName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setAlias($value)
    {
        $this->alias = $this->castValueIfNeeded("alias", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setNotes($value)
    {
        $this->notes = $this->castValueIfNeeded("notes", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setPhoto($value)
    {
        $this->photo = $this->castValueIfNeeded("photo", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ContactItemType
     */
    public function setUserSMIMECertificate(array $value)
    {
        $this->userSMIMECertificate = $this->castValueIfNeeded("userSMIMECertificate", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return ContactItemType
     */
    public function setMSExchangeCertificate(array $value)
    {
        $this->mSExchangeCertificate = $this->castValueIfNeeded("mSExchangeCertificate", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return ContactItemType
     */
    public function setDirectoryId($value)
    {
        $this->directoryId = $this->castValueIfNeeded("directoryId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SingleRecipientType
     * @return ContactItemType
     */
    public function setManagerMailbox(SingleRecipientType $value)
    {
        $this->managerMailbox = $this->castValueIfNeeded("managerMailbox", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value EmailAddressType[]
     * @return ContactItemType
     */
    public function setDirectReports(array $value)
    {
        $this->directReports = $this->castValueIfNeeded("directReports", $value);
        return $this;
    }
}
