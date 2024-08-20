<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing PeriodType
 *
 *
 * XSD Type: PeriodType
 *
 * @method PeriodType setBias(\DateInterval $bias)
 * @method PeriodType setName(string $name)
 * @method PeriodType setId(string $id)
 */
class PeriodType extends Type
{

    /**
     * @var \DateInterval
     */
    protected $bias = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @return \DateInterval
     */
    public function getBias()
    {
        return $this->bias;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
