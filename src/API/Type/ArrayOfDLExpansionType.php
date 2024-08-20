<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfDLExpansionType
 *
 *
 * XSD Type: ArrayOfDLExpansionType
 *
 * @method ArrayOfDLExpansionType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method ArrayOfDLExpansionType setNumeratorOffset(integer $numeratorOffset)
 * @method ArrayOfDLExpansionType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method ArrayOfDLExpansionType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method ArrayOfDLExpansionType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfDLExpansionType addMailbox(EmailAddressType $mailbox)
 * @method ArrayOfDLExpansionType setMailbox(array $mailbox)
 */
class ArrayOfDLExpansionType extends Type
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
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $mailbox = null;

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
     * @return EmailAddressType[]
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }
}
