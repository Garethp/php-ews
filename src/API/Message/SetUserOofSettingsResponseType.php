<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing SetUserOofSettingsResponseType
 *
 *
 * XSD Type: SetUserOofSettingsResponse
 *
 * @method SetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 */
class SetUserOofSettingsResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @return ResponseMessageType
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }
}
