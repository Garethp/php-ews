<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RulePredicateDateRangeType
 *
 * Date range type used for the WithinDateRange rule predicate.
 * XSD Type: RulePredicateDateRangeType
 */
class RulePredicateDateRangeType extends Type
{

    /**
     * @var \DateTime
     */
    protected $startDateTime = null;

    /**
     * @var \DateTime
     */
    protected $endDateTime = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return RulePredicateDateRangeType
     */
    public function setStartDateTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->startDateTime = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return RulePredicateDateRangeType
     */
    public function setEndDateTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->endDateTime = $value;
        return $this;
    }
}
