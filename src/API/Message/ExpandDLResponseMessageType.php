<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExpandDLResponseMessageType
 *
 *
 * XSD Type: ExpandDLResponseMessageType
 *
 * @method integer getIndexedPagingOffset()
 * @method ExpandDLResponseMessageType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method integer getNumeratorOffset()
 * @method ExpandDLResponseMessageType setNumeratorOffset(integer $numeratorOffset)
 * @method integer getAbsoluteDenominator()
 * @method ExpandDLResponseMessageType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method boolean getIncludesLastItemInRange()
 * @method ExpandDLResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method integer getTotalItemsInView()
 * @method ExpandDLResponseMessageType setTotalItemsInView(integer $totalItemsInView)
 * @method \garethp\ews\API\Type\ArrayOfDLExpansionType getDLExpansion()
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
     * @returns bool
     */
    public function isIncludesLastItemInRange()
    {
        return ((bool) $this->includesLastItemInRange);
    }
}
