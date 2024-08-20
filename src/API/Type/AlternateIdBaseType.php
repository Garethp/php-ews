<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing AlternateIdBaseType
 *
 * Surfaces alternate representations of an item or folder id. No change key is included.
 * XSD Type: AlternateIdBaseType
 *
 * @method AlternateIdBaseType setFormat(string $format)
 */
class AlternateIdBaseType extends Type
{

    /**
     * @var string
     */
    protected $format = null;

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
}
