<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteUserConfigurationType
 *
 *
 * XSD Type: DeleteUserConfigurationType
 */
class DeleteUserConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

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
     * @return DeleteUserConfigurationType
     */
    public function setUserConfigurationName(\garethp\ews\API\Type\UserConfigurationNameType $value)
    {
        $this->userConfigurationName = $this->castValueIfNeeded("userConfigurationName", $value);
        return $this;
    }
}
