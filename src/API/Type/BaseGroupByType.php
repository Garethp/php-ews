<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BaseGroupByType
 *
 *
 * XSD Type: BaseGroupByType
 *
 * @method BaseGroupByType setOrder(string $order)
 */
class BaseGroupByType extends Type
{

    /**
     * @var string
     */
    protected $order = null;

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
}
