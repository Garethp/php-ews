<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TransitionTargetType
 *
 *
 * XSD Type: TransitionTargetType
 *
 * @method TransitionTargetType setKind(string $kind)
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
}
