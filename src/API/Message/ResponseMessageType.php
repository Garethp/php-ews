<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing ResponseMessageType
 *
 *
 * XSD Type: ResponseMessageType
 *
 * @method ResponseMessageType setResponseClass(string $responseClass)
 * @method ResponseMessageType setMessageText(string $messageText)
 * @method ResponseMessageType setResponseCode(string $responseCode)
 * @method ResponseMessageType setDescriptiveLinkKey(integer $descriptiveLinkKey)
 * @method ResponseMessageType setMessageXml(\garethp\ews\API\Message\ResponseMessageType\MessageXmlAType $messageXml)
 */
class ResponseMessageType extends Message
{

    /**
     * @var string
     */
    protected $responseClass = null;

    /**
     * @var string
     */
    protected $messageText = null;

    /**
     * @var string
     */
    protected $responseCode = null;

    /**
     * @var integer
     */
    protected $descriptiveLinkKey = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType\MessageXmlAType
     */
    protected $messageXml = null;

    /**
     * @return string
     */
    public function getResponseClass()
    {
        return $this->responseClass;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return integer
     */
    public function getDescriptiveLinkKey()
    {
        return $this->descriptiveLinkKey;
    }

    /**
     * @return \garethp\ews\API\Message\ResponseMessageType\MessageXmlAType
     */
    public function getMessageXml()
    {
        return $this->messageXml;
    }
}
