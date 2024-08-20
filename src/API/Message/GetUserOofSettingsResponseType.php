<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method GetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method GetUserOofSettingsResponseType setOofSettings(\garethp\ews\API\Type\OofSettings $oofSettings)
 * @method GetUserOofSettingsResponseType setAllowExternalOof(string $allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \garethp\ews\API\Type\OofSettings
     */
    protected $oofSettings = null;

    /**
     * @var string
     */
    protected $allowExternalOof = null;

    /**
     * @return ResponseMessageType
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * @return \garethp\ews\API\Type\OofSettings
     */
    public function getOofSettings()
    {
        return $this->oofSettings;
    }

    /**
     * @return string
     */
    public function getAllowExternalOof()
    {
        return $this->allowExternalOof;
    }
}
