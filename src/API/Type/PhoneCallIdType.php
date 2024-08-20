<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PhoneCallIdType
 *
 *
 * XSD Type: PhoneCallIdType
 *
 * @method PhoneCallIdType setId(string $id)
 */
class PhoneCallIdType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
