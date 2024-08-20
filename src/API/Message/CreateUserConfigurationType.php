<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateUserConfigurationType
 *
 *
 * XSD Type: CreateUserConfigurationType
 *
 * @method CreateUserConfigurationType setUserConfiguration(\garethp\ews\API\Type\UserConfigurationType $userConfiguration)
 */
class CreateUserConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationType
     */
    protected $userConfiguration = null;

    /**
     * @return \garethp\ews\API\Type\UserConfigurationType
     */
    public function getUserConfiguration()
    {
        return $this->userConfiguration;
    }
}
