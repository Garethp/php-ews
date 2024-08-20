<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfDLExpansionType
 *
 *
 * XSD Type: ArrayOfDLExpansionType
 *
 * @method integer getIndexedPagingOffset()
 * @method ArrayOfDLExpansionType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method integer getNumeratorOffset()
 * @method ArrayOfDLExpansionType setNumeratorOffset(integer $numeratorOffset)
 * @method integer getAbsoluteDenominator()
 * @method ArrayOfDLExpansionType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method boolean getIncludesLastItemInRange()
 * @method ArrayOfDLExpansionType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method integer getTotalItemsInView()
 * @method ArrayOfDLExpansionType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfDLExpansionType addMailbox(EmailAddressType $mailbox)
 * @method EmailAddressType[] getMailbox()
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
     * @returns bool
     */
    public function isIncludesLastItemInRange()
    {
        return $this->includesLastItemInRange && $this->includesLastItemInRange;
    }
}
