<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ImAddressDictionaryEntryType
 *
 *
 * XSD Type: ImAddressDictionaryEntryType
 *
 * @method ImAddressDictionaryEntryType setKey(string $key)
 */
class ImAddressDictionaryEntryType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}
