<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserConfigurationResponseMessageType
 *
 *
 * XSD Type: GetUserConfigurationResponseMessageType
 *
 * @method GetUserConfigurationResponseMessageType setUserConfiguration(\garethp\ews\API\Type\UserConfigurationType $userConfiguration)
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
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
