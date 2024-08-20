<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing FreeBusyResponseType
 *
 *
 * XSD Type: FreeBusyResponseType
 *
 * @method FreeBusyResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method FreeBusyResponseType setFreeBusyView(\garethp\ews\API\Type\FreeBusyViewType $freeBusyView)
 */
class FreeBusyResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \garethp\ews\API\Type\FreeBusyViewType
     */
    protected $freeBusyView = null;

    /**
     * @return ResponseMessageType
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * @return \garethp\ews\API\Type\FreeBusyViewType
     */
    public function getFreeBusyView()
    {
        return $this->freeBusyView;
    }
}
