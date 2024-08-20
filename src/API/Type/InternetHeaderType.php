<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing InternetHeaderType
 *
 *
 * XSD Type: InternetHeaderType
 *
 * @method InternetHeaderType setHeaderName(string $headerName)
 */
class InternetHeaderType extends Type
{

    /**
     * @var string
     */
    protected $headerName = null;

    /**
     * @return string
     */
    public function getHeaderName()
    {
        return $this->headerName;
    }
}
