<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SerializedSecurityContextType
 *
 *
 * XSD Type: SerializedSecurityContextType
 *
 * @method SerializedSecurityContextType setUserSid(string $userSid)
 * @method SerializedSecurityContextType addGroupSids(SidAndAttributesType $groupSids)
 * @method SerializedSecurityContextType setGroupSids(array $groupSids)
 * @method SerializedSecurityContextType addRestrictedGroupSids(SidAndAttributesType $restrictedGroupSids)
 * @method SerializedSecurityContextType setRestrictedGroupSids(array $restrictedGroupSids)
 * @method SerializedSecurityContextType setPrimarySmtpAddress(string $primarySmtpAddress)
 */
class SerializedSecurityContextType extends Type
{

    /**
     * @var string
     */
    protected $userSid = null;

    /**
     * @var \garethp\ews\API\Type\SidAndAttributesType[]
     */
    protected $groupSids = null;

    /**
     * @var \garethp\ews\API\Type\SidAndAttributesType[]
     */
    protected $restrictedGroupSids = null;

    /**
     * @var string
     */
    protected $primarySmtpAddress = null;

    /**
     * @return string
     */
    public function getUserSid()
    {
        return $this->userSid;
    }

    /**
     * @return SidAndAttributesType[]
     */
    public function getGroupSids()
    {
        return $this->groupSids;
    }

    /**
     * @return SidAndAttributesType[]
     */
    public function getRestrictedGroupSids()
    {
        return $this->restrictedGroupSids;
    }

    /**
     * @return string
     */
    public function getPrimarySmtpAddress()
    {
        return $this->primarySmtpAddress;
    }
}
