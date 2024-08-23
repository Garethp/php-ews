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
 * @method RestrictionType addExcludes(Excludes $excludes)
 * @method RestrictionType addExists(Exists $exists)
 * @method RestrictionType addIsEqualTo(IsEqualTo $isEqualTo)
 * @method RestrictionType addIsNotEqualTo(IsNotEqualTo $isNotEqualTo)
 * @method RestrictionType addIsGreaterThan(IsGreaterThan $isGreaterThan)
 * @method RestrictionType addIsGreaterThanOrEqualTo(IsGreaterThanOrEqualTo $isGreaterThanOrEqualTo)
 * @method RestrictionType addIsLessThan(IsLessThan $isLessThan)
 * @method RestrictionType addIsLessThanOrEqualTo(IsLessThanOrEqualTo $isLessThanOrEqualTo)
 * @method RestrictionType addAnd(AndElement $and)
 * @method RestrictionType addNot(Not $not)
 * @method RestrictionType addOr(OrElement $or)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value Contains[]
     * @return RestrictionType
     */
    public function setContains(array $value)
    {
        $this->contains = $this->castValueIfNeeded("contains", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value Excludes[]
     * @return RestrictionType
     */
    public function setExcludes(array $value)
    {
        $this->excludes = $this->castValueIfNeeded("excludes", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value Exists[]
     * @return RestrictionType
     */
    public function setExists(array $value)
    {
        $this->exists = $this->castValueIfNeeded("exists", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IsEqualTo[]
     * @return RestrictionType
     */
    public function setIsEqualTo(array $value)
    {
        $this->isEqualTo = $this->castValueIfNeeded("isEqualTo", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IsNotEqualTo[]
     * @return RestrictionType
     */
    public function setIsNotEqualTo(array $value)
    {
        $this->isNotEqualTo = $this->castValueIfNeeded("isNotEqualTo", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IsGreaterThan[]
     * @return RestrictionType
     */
    public function setIsGreaterThan(array $value)
    {
        $this->isGreaterThan = $this->castValueIfNeeded("isGreaterThan", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IsGreaterThanOrEqualTo[]
     * @return RestrictionType
     */
    public function setIsGreaterThanOrEqualTo(array $value)
    {
        $this->isGreaterThanOrEqualTo = $this->castValueIfNeeded("isGreaterThanOrEqualTo", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IsLessThan[]
     * @return RestrictionType
     */
    public function setIsLessThan(array $value)
    {
        $this->isLessThan = $this->castValueIfNeeded("isLessThan", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value IsLessThanOrEqualTo[]
     * @return RestrictionType
     */
    public function setIsLessThanOrEqualTo(array $value)
    {
        $this->isLessThanOrEqualTo = $this->castValueIfNeeded("isLessThanOrEqualTo", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AndElement[]
     * @return RestrictionType
     */
    public function setAnd(array $value)
    {
        $this->and = $this->castValueIfNeeded("and", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value Not[]
     * @return RestrictionType
     */
    public function setNot(array $value)
    {
        $this->not = $this->castValueIfNeeded("not", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value OrElement[]
     * @return RestrictionType
     */
    public function setOr(array $value)
    {
        $this->or = $this->castValueIfNeeded("or", $value);
        return $this;
    }
}
