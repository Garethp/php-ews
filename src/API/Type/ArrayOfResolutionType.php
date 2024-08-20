<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfResolutionType
 *
 *
 * XSD Type: ArrayOfResolutionType
 *
 * @method ArrayOfResolutionType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method ArrayOfResolutionType setNumeratorOffset(integer $numeratorOffset)
 * @method ArrayOfResolutionType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method ArrayOfResolutionType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method ArrayOfResolutionType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfResolutionType addResolution(ResolutionType $resolution)
 * @method ArrayOfResolutionType setResolution(array $resolution)
 */
class ArrayOfResolutionType extends Type
{

    /**
     * @var integer
     */
    protected $indexedPagingOffset = null;

    /**
     * @var integer
     */
    protected $numeratorOffset = null;

    /**
     * @var integer
     */
    protected $absoluteDenominator = null;

    /**
     * @var boolean
     */
    protected $includesLastItemInRange = null;

    /**
     * @var integer
     */
    protected $totalItemsInView = null;

    /**
     * @var \garethp\ews\API\Type\ResolutionType[]
     */
    protected $resolution = null;

    /**
     * @return integer
     */
    public function getIndexedPagingOffset()
    {
        return $this->indexedPagingOffset;
    }

    /**
     * @return integer
     */
    public function getNumeratorOffset()
    {
        return $this->numeratorOffset;
    }

    /**
     * @return integer
     */
    public function getAbsoluteDenominator()
    {
        return $this->absoluteDenominator;
    }

    /**
     * @returns bool
     */
    public function isIncludesLastItemInRange()
    {
        return ((bool) $this->includesLastItemInRange);
    }

    /**
     * @return boolean
     */
    public function getIncludesLastItemInRange()
    {
        return $this->includesLastItemInRange;
    }

    /**
     * @return integer
     */
    public function getTotalItemsInView()
    {
        return $this->totalItemsInView;
    }

    /**
     * @return ResolutionType[]
     */
    public function getResolution()
    {
        return $this->resolution;
    }
}
