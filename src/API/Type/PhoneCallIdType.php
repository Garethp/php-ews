<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PhoneCallIdType
 *
 *
 * XSD Type: PhoneCallIdType
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return PhoneCallIdType
     */
    public function setId($value)
    {
        $this->id = $this->castValueIfNeeded("id", $value);
        return $this;
    }
}
