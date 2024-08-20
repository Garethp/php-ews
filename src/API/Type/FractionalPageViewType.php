<?php

namespace garethp\ews\API\Type;

/**
 * Class representing FractionalPageViewType
 *
 *
 * XSD Type: FractionalPageViewType
 *
 * @method FractionalPageViewType setNumerator(integer $numerator)
 * @method FractionalPageViewType setDenominator(integer $denominator)
 */
class FractionalPageViewType extends BasePagingType
{

    /**
     * @var integer
     */
    protected $numerator = null;

    /**
     * @var integer
     */
    protected $denominator = null;

    /**
     * @return integer
     */
    public function getNumerator()
    {
        return $this->numerator;
    }

    /**
     * @return integer
     */
    public function getDenominator()
    {
        return $this->denominator;
    }
}
