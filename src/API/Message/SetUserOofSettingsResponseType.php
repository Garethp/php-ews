<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing SetUserOofSettingsResponseType
 *
 *
 * XSD Type: SetUserOofSettingsResponse
 */
class SetUserOofSettingsResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return SetUserOofSettingsResponseType
     */
    public function setResponseMessage(ResponseMessageType $value)
    {
        $this->responseMessage = $this->castValueIfNeeded("responseMessage", $value);
        return $this;
    }
}
