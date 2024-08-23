<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateUserConfigurationType
 *
 *
 * XSD Type: CreateUserConfigurationType
 */
class CreateUserConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationType
     */
    protected $userConfiguration = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\UserConfigurationType
     */
    public function getUserConfiguration()
    {
        return $this->userConfiguration;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\UserConfigurationType
     * @return CreateUserConfigurationType
     */
    public function setUserConfiguration(\garethp\ews\API\Type\UserConfigurationType $value)
    {
        $this->userConfiguration = $this->castValueIfNeeded("userConfiguration", $value);
        return $this;
    }
}
