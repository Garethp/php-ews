<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RequestServerVersion
 *
 * @method RequestServerVersion setVersion(string $version)
 */
class RequestServerVersion extends Type
{

    /**
     * @var string
     */
    protected $version = null;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
