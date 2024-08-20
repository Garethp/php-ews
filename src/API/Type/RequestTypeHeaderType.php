<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RequestTypeHeaderType
 *
 *
 * XSD Type: RequestTypeHeader
 *
 * @method RequestTypeHeaderType setRequestType(string $requestType)
 */
class RequestTypeHeaderType extends Type
{

    /**
     * @var string
     */
    protected $requestType = null;

    /**
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }
}
