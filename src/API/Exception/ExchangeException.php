<?php

namespace garethp\ews\API\Exception;

use garethp\ews\API;
use garethp\ews\API\Message\ResponseMessageType;
use Throwable;

class ExchangeException extends API\Exception
{
    /**
     * @var ResponseMessageType
     */
    private $response;

    public function __construct(ResponseMessageType $response, $code = 0, ?Throwable $previous = null)
    {
        $this->response = $response;
        parent::__construct($response->getMessageText(), $code, $previous);
    }

    /**
     * @return ResponseMessageType
     */
    public function getResponse()
    {
        return $this->response;
    }
}
