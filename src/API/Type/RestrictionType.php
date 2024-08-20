<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RestrictionType
 *
 *
 * XSD Type: RestrictionType
 *
 * @method RestrictionType addContains(Contains $contains)
 * @method RestrictionType setContains(array $contains)
 * @method RestrictionType addExcludes(Excludes $excludes)
 * @method RestrictionType setExcludes(array $excludes)
 * @method RestrictionType addExists(Exists $exists)
 * @method RestrictionType setExists(array $exists)
 * @method RestrictionType addIsEqualTo(IsEqualTo $isEqualTo)
 * @method RestrictionType setIsEqualTo(array $isEqualTo)
 * @method RestrictionType addIsNotEqualTo(IsNotEqualTo $isNotEqualTo)
 * @method RestrictionType setIsNotEqualTo(array $isNotEqualTo)
 * @method RestrictionType addIsGreaterThan(IsGreaterThan $isGreaterThan)
 * @method RestrictionType setIsGreaterThan(array $isGreaterThan)
 * @method RestrictionType addIsGreaterThanOrEqualTo(IsGreaterThanOrEqualTo $isGreaterThanOrEqualTo)
 * @method RestrictionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method RestrictionType addIsLessThan(IsLessThan $isLessThan)
 * @method RestrictionType setIsLessThan(array $isLessThan)
 * @method RestrictionType addIsLessThanOrEqualTo(IsLessThanOrEqualTo $isLessThanOrEqualTo)
 * @method RestrictionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method RestrictionType addAnd(AndElement $and)
 * @method RestrictionType setAnd(array $and)
 * @method RestrictionType addNot(Not $not)
 * @method RestrictionType setNot(array $not)
 * @method RestrictionType addOr(OrElement $or)
 * @method RestrictionType setOr(array $or)
 */
class RestrictionType extends Type
{

    /**
     * @var \garethp\ews\API\Type\Contains[]
     */
    protected $contains = null;

    /**
     * @var \garethp\ews\API\Type\Excludes[]
     */
    protected $excludes = null;

    /**
     * @var \garethp\ews\API\Type\Exists[]
     */
    protected $exists = null;

    /**
     * @var \garethp\ews\API\Type\IsEqualTo[]
     */
    protected $isEqualTo = null;

    /**
     * @var \garethp\ews\API\Type\IsNotEqualTo[]
     */
    protected $isNotEqualTo = null;

    /**
     * @var \garethp\ews\API\Type\IsGreaterThan[]
     */
    protected $isGreaterThan = null;

    /**
     * @var \garethp\ews\API\Type\IsGreaterThanOrEqualTo[]
     */
    protected $isGreaterThanOrEqualTo = null;

    /**
     * @var \garethp\ews\API\Type\IsLessThan[]
     */
    protected $isLessThan = null;

    /**
     * @var \garethp\ews\API\Type\IsLessThanOrEqualTo[]
     */
    protected $isLessThanOrEqualTo = null;

    /**
     * @var \garethp\ews\API\Type\AndElement[]
     */
    protected $and = null;

    /**
     * @var \garethp\ews\API\Type\Not[]
     */
    protected $not = null;

    /**
     * @var \garethp\ews\API\Type\OrElement[]
     */
    protected $or = null;

    /**
     * @return Contains[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * @return Excludes[]
     */
    public function getExcludes()
    {
        return $this->excludes;
    }

    /**
     * @return Exists[]
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * @return IsEqualTo[]
     */
    public function getIsEqualTo()
    {
        return $this->isEqualTo;
    }

    /**
     * @return IsNotEqualTo[]
     */
    public function getIsNotEqualTo()
    {
        return $this->isNotEqualTo;
    }

    /**
     * @return IsGreaterThan[]
     */
    public function getIsGreaterThan()
    {
        return $this->isGreaterThan;
    }

    /**
     * @return IsGreaterThanOrEqualTo[]
     */
    public function getIsGreaterThanOrEqualTo()
    {
        return $this->isGreaterThanOrEqualTo;
    }

    /**
     * @return IsLessThan[]
     */
    public function getIsLessThan()
    {
        return $this->isLessThan;
    }

    /**
     * @return IsLessThanOrEqualTo[]
     */
    public function getIsLessThanOrEqualTo()
    {
        return $this->isLessThanOrEqualTo;
    }

    /**
     * @return AndElement[]
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @return Not[]
     */
    public function getNot()
    {
        return $this->not;
    }

    /**
     * @return OrElement[]
     */
    public function getOr()
    {
        return $this->or;
    }
}
