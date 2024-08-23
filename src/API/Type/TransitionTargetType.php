<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TransitionTargetType
 *
 *
 * XSD Type: TransitionTargetType
 */
class TransitionTargetType extends Type
{

    /**
     * @var string
     */
    protected $kind = null;

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return TransitionTargetType
     */
    public function setKind($value)
    {
        $this->kind = $this->castValueIfNeeded("kind", $value);
        return $this;
    }
}
