<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ContactItemType
 *
 *
 * XSD Type: ContactItemType
 *
 * @method ContactItemType setFileAs(string $fileAs)
 * @method ContactItemType setFileAsMapping(string $fileAsMapping)
 * @method ContactItemType setDisplayName(string $displayName)
 * @method ContactItemType setGivenName(string $givenName)
 * @method ContactItemType setInitials(string $initials)
 * @method ContactItemType setMiddleName(string $middleName)
 * @method ContactItemType setNickname(string $nickname)
 * @method ContactItemType setCompleteName(CompleteNameType $completeName)
 * @method ContactItemType setCompanyName(string $companyName)
 * @method ContactItemType addEmailAddresses(EmailAddressDictionaryEntryType $emailAddresses)
 * @method ContactItemType setEmailAddresses(array $emailAddresses)
 * @method ContactItemType addPhysicalAddresses(PhysicalAddressDictionaryEntryType $physicalAddresses)
 * @method ContactItemType setPhysicalAddresses(array $physicalAddresses)
 * @method ContactItemType addPhoneNumbers(PhoneNumberDictionaryEntryType $phoneNumbers)
 * @method ContactItemType setPhoneNumbers(array $phoneNumbers)
 * @method ContactItemType setAssistantName(string $assistantName)
 * @method ContactItemType setBirthday(\DateTime $birthday)
 * @method ContactItemType setBusinessHomePage(string $businessHomePage)
 * @method ContactItemType addChildren(string $children)
 * @method ContactItemType setChildren(array $children)
 * @method ContactItemType addCompanies(string $companies)
 * @method ContactItemType setCompanies(array $companies)
 * @method ContactItemType setContactSource(string $contactSource)
 * @method ContactItemType setDepartment(string $department)
 * @method ContactItemType setGeneration(string $generation)
 * @method ContactItemType addImAddresses(ImAddressDictionaryEntryType $imAddresses)
 * @method ContactItemType setImAddresses(array $imAddresses)
 * @method ContactItemType setJobTitle(string $jobTitle)
 * @method ContactItemType setManager(string $manager)
 * @method ContactItemType setMileage(string $mileage)
 * @method ContactItemType setOfficeLocation(string $officeLocation)
 * @method ContactItemType setPostalAddressIndex(string $postalAddressIndex)
 * @method ContactItemType setProfession(string $profession)
 * @method ContactItemType setSpouseName(string $spouseName)
 * @method ContactItemType setSurname(string $surname)
 * @method ContactItemType setWeddingAnniversary(\DateTime $weddingAnniversary)
 * @method ContactItemType setHasPicture(boolean $hasPicture)
 * @method ContactItemType setPhoneticFullName(string $phoneticFullName)
 * @method ContactItemType setPhoneticFirstName(string $phoneticFirstName)
 * @method ContactItemType setPhoneticLastName(string $phoneticLastName)
 * @method ContactItemType setAlias(string $alias)
 * @method ContactItemType setNotes(string $notes)
 * @method ContactItemType setPhoto(string $photo)
 * @method ContactItemType addUserSMIMECertificate(string $userSMIMECertificate)
 * @method ContactItemType setUserSMIMECertificate(array $userSMIMECertificate)
 * @method ContactItemType addMSExchangeCertificate(string $mSExchangeCertificate)
 * @method ContactItemType setMSExchangeCertificate(array $mSExchangeCertificate)
 * @method ContactItemType setDirectoryId(string $directoryId)
 * @method ContactItemType setManagerMailbox(SingleRecipientType $managerMailbox)
 * @method ContactItemType addDirectReports(EmailAddressType $directReports)
 * @method ContactItemType setDirectReports(array $directReports)
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
     * @returns bool
     */
    public function isHasPicture()
    {
        return ((bool) $this->hasPicture);
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
}
