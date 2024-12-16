<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserConfigurationType
 *
 *
 * XSD Type: GetUserConfigurationType
 */
class GetUserConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @var string[]
     */
    protected $userConfigurationProperties = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\UserConfigurationNameType
     */
    public function getUserConfigurationName()
    {
        return $this->userConfigurationName;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\UserConfigurationNameType
     * @return GetUserConfigurationType
     */
    public function setUserConfigurationName(\garethp\ews\API\Type\UserConfigurationNameType $value)
    {
        $this->userConfigurationName = $this->castValueIfNeeded("userConfigurationName", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetUserConfigurationType
     */
    public function addUserConfigurationProperties($value)
    {
        $value = $this->castValueIfNeeded("userConfigurationProperties", $value);

        if ($this->userConfigurationProperties === null) {
            $this->userConfigurationProperties = array();
        }

        if (!is_array($this->userConfigurationProperties)) {
            $this->userConfigurationProperties = array($this->userConfigurationProperties);
        }

        $this->userConfigurationProperties[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getUserConfigurationProperties()
    {
        return $this->userConfigurationProperties;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return GetUserConfigurationType
     */
    public function setUserConfigurationProperties(array $value)
    {
        $this->userConfigurationProperties = $this->castValueIfNeeded("userConfigurationProperties", $value);
        return $this;
    }
}
