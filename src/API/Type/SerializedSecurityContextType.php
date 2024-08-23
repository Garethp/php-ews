<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SerializedSecurityContextType
 *
 *
 * XSD Type: SerializedSecurityContextType
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
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getUserSid()
    {
        return $this->userSid;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SerializedSecurityContextType
     */
    public function setUserSid($value)
    {
        $this->userSid = $this->castValueIfNeeded("userSid", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SidAndAttributesType
     * @return SerializedSecurityContextType
     */
    public function addGroupSids(SidAndAttributesType $value)
    {
        $value = $this->castValueIfNeeded("groupSids", $value);

        if ($this->groupSids === null) {
            $this->groupSids = array();
        }

        if (!is_array($this->groupSids)) {
            $this->groupSids = array($this->groupSids);
        }

        $this->groupSids[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SidAndAttributesType[]
     */
    public function getGroupSids()
    {
        return $this->groupSids;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SidAndAttributesType[]
     * @return SerializedSecurityContextType
     */
    public function setGroupSids(array $value)
    {
        $this->groupSids = $this->castValueIfNeeded("groupSids", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SidAndAttributesType
     * @return SerializedSecurityContextType
     */
    public function addRestrictedGroupSids(SidAndAttributesType $value)
    {
        $value = $this->castValueIfNeeded("restrictedGroupSids", $value);

        if ($this->restrictedGroupSids === null) {
            $this->restrictedGroupSids = array();
        }

        if (!is_array($this->restrictedGroupSids)) {
            $this->restrictedGroupSids = array($this->restrictedGroupSids);
        }

        $this->restrictedGroupSids[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SidAndAttributesType[]
     */
    public function getRestrictedGroupSids()
    {
        return $this->restrictedGroupSids;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SidAndAttributesType[]
     * @return SerializedSecurityContextType
     */
    public function setRestrictedGroupSids(array $value)
    {
        $this->restrictedGroupSids = $this->castValueIfNeeded("restrictedGroupSids", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getPrimarySmtpAddress()
    {
        return $this->primarySmtpAddress;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SerializedSecurityContextType
     */
    public function setPrimarySmtpAddress($value)
    {
        $this->primarySmtpAddress = $this->castValueIfNeeded("primarySmtpAddress", $value);
        return $this;
    }
}
