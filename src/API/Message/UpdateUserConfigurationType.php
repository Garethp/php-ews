<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateUserConfigurationType
 *
 *
 * XSD Type: UpdateUserConfigurationType
 *
 * @method UpdateUserConfigurationType setUserConfiguration(\garethp\ews\API\Type\UserConfigurationType $userConfiguration)
 */
class UpdateUserConfigurationType extends BaseRequestType
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
