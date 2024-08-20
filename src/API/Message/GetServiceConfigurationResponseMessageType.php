<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: GetServiceConfigurationResponseMessageType
 *
 * @method GetServiceConfigurationResponseMessageType addResponseMessages(ServiceConfigurationResponseMessageType $responseMessages)
 * @method GetServiceConfigurationResponseMessageType setResponseMessages(array $responseMessages)
 */
class GetServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Message\ServiceConfigurationResponseMessageType[]
     */
    protected $responseMessages = null;

    /**
     * @return ServiceConfigurationResponseMessageType[]
     */
    public function getResponseMessages()
    {
        return $this->responseMessages;
    }
}
