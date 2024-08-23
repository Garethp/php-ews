<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfResolutionType
 *
 *
 * XSD Type: ArrayOfResolutionType
 *
 * @method ArrayOfResolutionType addResolution(ResolutionType $resolution)
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
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ArrayOfResolutionType
     */
    public function setIndexedPagingOffset($value)
    {
        $this->indexedPagingOffset = $this->castValueIfNeeded("indexedPagingOffset", $value);
        return $this;
    }

    /**
     * @return integer
     */
    public function getNumeratorOffset()
    {
        return $this->numeratorOffset;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ArrayOfResolutionType
     */
    public function setNumeratorOffset($value)
    {
        $this->numeratorOffset = $this->castValueIfNeeded("numeratorOffset", $value);
        return $this;
    }

    /**
     * @return integer
     */
    public function getAbsoluteDenominator()
    {
        return $this->absoluteDenominator;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ArrayOfResolutionType
     */
    public function setAbsoluteDenominator($value)
    {
        $this->absoluteDenominator = $this->castValueIfNeeded("absoluteDenominator", $value);
        return $this;
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
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ArrayOfResolutionType
     */
    public function setIncludesLastItemInRange($value)
    {
        $this->includesLastItemInRange = $this->castValueIfNeeded("includesLastItemInRange", $value);
        return $this;
    }

    /**
     * @return integer
     */
    public function getTotalItemsInView()
    {
        return $this->totalItemsInView;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ArrayOfResolutionType
     */
    public function setTotalItemsInView($value)
    {
        $this->totalItemsInView = $this->castValueIfNeeded("totalItemsInView", $value);
        return $this;
    }

    /**
     * @return ResolutionType[]
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResolutionType[]
     * @return ArrayOfResolutionType
     */
    public function setResolution(array $value)
    {
        $this->resolution = $this->castValueIfNeeded("resolution", $value);
        return $this;
    }
}
