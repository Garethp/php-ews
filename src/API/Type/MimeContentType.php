<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MimeContentType
 *
 *
 * XSD Type: MimeContentType
 *
 * @method MimeContentType setCharacterSet(string $characterSet)
 */
class MimeContentType extends Type
{

    /**
     * @var string
     */
    protected $characterSet = null;

    /**
     * @return string
     */
    public function getCharacterSet()
    {
        return $this->characterSet;
    }
}
