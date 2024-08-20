<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConflictResultsType
 *
 *
 * XSD Type: ConflictResultsType
 *
 * @method ConflictResultsType setCount(integer $count)
 */
class ConflictResultsType extends Type
{

    /**
     * @var integer
     */
    protected $count = null;

    /**
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }
}
