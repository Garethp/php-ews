<?php

namespace garethp\ews\API\Type;

/**
 * Class representing DistributionListType
 *
 *
 * XSD Type: DistributionListType
 *
 * @method DistributionListType setDisplayName(string $displayName)
 * @method DistributionListType setFileAs(string $fileAs)
 * @method DistributionListType setContactSource(string $contactSource)
 * @method DistributionListType addMembers(MemberType $members)
 * @method DistributionListType setMembers(array $members)
 */
class DistributionListType extends ItemType
{

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var string
     */
    protected $fileAs = null;

    /**
     * @var string
     */
    protected $contactSource = null;

    /**
     * @var \garethp\ews\API\Type\MemberType[]
     */
    protected $members = null;

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
    public function getFileAs()
    {
        return $this->fileAs;
    }

    /**
     * @return string
     */
    public function getContactSource()
    {
        return $this->contactSource;
    }

    /**
     * @return MemberType[]
     */
    public function getMembers()
    {
        return $this->members;
    }
}
