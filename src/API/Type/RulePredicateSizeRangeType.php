<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RulePredicateSizeRangeType
 *
 * Size range type used for the WithinSizeRange rule predicate.
 * XSD Type: RulePredicateSizeRangeType
 *
 * @method RulePredicateSizeRangeType setMinimumSize(integer $minimumSize)
 * @method RulePredicateSizeRangeType setMaximumSize(integer $maximumSize)
 */
class RulePredicateSizeRangeType extends Type
{

    /**
     * @var integer
     */
    protected $minimumSize = null;

    /**
     * @var integer
     */
    protected $maximumSize = null;

    /**
     * @return integer
     */
    public function getMinimumSize()
    {
        return $this->minimumSize;
    }

    /**
     * @return integer
     */
    public function getMaximumSize()
    {
        return $this->maximumSize;
    }
}
