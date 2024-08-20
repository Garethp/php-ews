<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetServiceConfigurationType
 *
 *
 * XSD Type: GetServiceConfigurationType
 *
 * @method GetServiceConfigurationType setActingAs(\garethp\ews\API\Type\EmailAddressType $actingAs)
 * @method GetServiceConfigurationType addRequestedConfiguration(\garethp\ews\API\Enumeration\ServiceConfigurationType $requestedConfiguration)
 * @method GetServiceConfigurationType setRequestedConfiguration(array $requestedConfiguration)
 */
class GetServiceConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $actingAs = null;

    /**
     * @var \garethp\ews\API\Enumeration\ServiceConfigurationType[]
     */
    protected $requestedConfiguration = null;

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getActingAs()
    {
        return $this->actingAs;
    }

    /**
     * @return \garethp\ews\API\Enumeration\ServiceConfigurationType[]
     */
    public function getRequestedConfiguration()
    {
        return $this->requestedConfiguration;
    }
}
