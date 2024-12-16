<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExpandDLResponseMessageType
 *
 *
 * XSD Type: ExpandDLResponseMessageType
 */
class ExpandDLResponseMessageType extends ResponseMessageType
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
     * @var \garethp\ews\API\Type\ArrayOfDLExpansionType
     */
    protected $dLExpansion = null;

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getIndexedPagingOffset()
    {
        return $this->indexedPagingOffset;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ExpandDLResponseMessageType
     */
    public function setIndexedPagingOffset($value)
    {
        $this->indexedPagingOffset = $this->castValueIfNeeded("indexedPagingOffset", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getNumeratorOffset()
    {
        return $this->numeratorOffset;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ExpandDLResponseMessageType
     */
    public function setNumeratorOffset($value)
    {
        $this->numeratorOffset = $this->castValueIfNeeded("numeratorOffset", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getAbsoluteDenominator()
    {
        return $this->absoluteDenominator;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ExpandDLResponseMessageType
     */
    public function setAbsoluteDenominator($value)
    {
        $this->absoluteDenominator = $this->castValueIfNeeded("absoluteDenominator", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isIncludesLastItemInRange()
    {
        return ((bool) $this->includesLastItemInRange);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIncludesLastItemInRange()
    {
        return $this->includesLastItemInRange;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return ExpandDLResponseMessageType
     */
    public function setIncludesLastItemInRange($value)
    {
        $this->includesLastItemInRange = $this->castValueIfNeeded("includesLastItemInRange", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return integer
     */
    public function getTotalItemsInView()
    {
        return $this->totalItemsInView;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value int
     * @return ExpandDLResponseMessageType
     */
    public function setTotalItemsInView($value)
    {
        $this->totalItemsInView = $this->castValueIfNeeded("totalItemsInView", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\ArrayOfDLExpansionType
     */
    public function getDLExpansion()
    {
        return $this->dLExpansion;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ArrayOfDLExpansionType
     * @return ExpandDLResponseMessageType
     */
    public function setDLExpansion(\garethp\ews\API\Type\ArrayOfDLExpansionType $value)
    {
        $this->dLExpansion = $this->castValueIfNeeded("dLExpansion", $value);
        return $this;
    }
}
