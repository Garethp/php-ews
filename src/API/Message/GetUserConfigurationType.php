<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserConfigurationType
 *
 *
 * XSD Type: GetUserConfigurationType
 *
 * @method GetUserConfigurationType setUserConfigurationName(\garethp\ews\API\Type\UserConfigurationNameType $userConfigurationName)
 * @method GetUserConfigurationType addUserConfigurationProperties(string $userConfigurationProperties)
 * @method GetUserConfigurationType setUserConfigurationProperties(array $userConfigurationProperties)
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
     * @return \garethp\ews\API\Type\UserConfigurationNameType
     */
    public function getUserConfigurationName()
    {
        return $this->userConfigurationName;
    }

    /**
     * @return string[]
     */
    public function getUserConfigurationProperties()
    {
        return $this->userConfigurationProperties;
    }
}
