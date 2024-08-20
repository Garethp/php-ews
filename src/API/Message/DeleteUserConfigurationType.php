<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteUserConfigurationType
 *
 *
 * XSD Type: DeleteUserConfigurationType
 *
 * @method DeleteUserConfigurationType setUserConfigurationName(\garethp\ews\API\Type\UserConfigurationNameType $userConfigurationName)
 */
class DeleteUserConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @return \garethp\ews\API\Type\UserConfigurationNameType
     */
    public function getUserConfigurationName()
    {
        return $this->userConfigurationName;
    }
}
