<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExpandDLResponseMessageType
 *
 *
 * XSD Type: ExpandDLResponseMessageType
 *
 * @method ExpandDLResponseMessageType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method ExpandDLResponseMessageType setNumeratorOffset(integer $numeratorOffset)
 * @method ExpandDLResponseMessageType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method ExpandDLResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method ExpandDLResponseMessageType setTotalItemsInView(integer $totalItemsInView)
 * @method ExpandDLResponseMessageType setDLExpansion(\garethp\ews\API\Type\ArrayOfDLExpansionType $dLExpansion)
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
     * @return \garethp\ews\API\Type\ArrayOfDLExpansionType
     */
    public function getDLExpansion()
    {
        return $this->dLExpansion;
    }
}
