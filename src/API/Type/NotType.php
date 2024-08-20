<?php

namespace garethp\ews\API\Type;

/**
 * Class representing NotType
 *
 *
 * XSD Type: NotType
 *
 * @method NotType addContains(Contains $contains)
 * @method NotType setContains(array $contains)
 * @method NotType addExcludes(Excludes $excludes)
 * @method NotType setExcludes(array $excludes)
 * @method NotType addExists(Exists $exists)
 * @method NotType setExists(array $exists)
 * @method NotType addIsEqualTo(IsEqualTo $isEqualTo)
 * @method NotType setIsEqualTo(array $isEqualTo)
 * @method NotType addIsNotEqualTo(IsNotEqualTo $isNotEqualTo)
 * @method NotType setIsNotEqualTo(array $isNotEqualTo)
 * @method NotType addIsGreaterThan(IsGreaterThan $isGreaterThan)
 * @method NotType setIsGreaterThan(array $isGreaterThan)
 * @method NotType addIsGreaterThanOrEqualTo(IsGreaterThanOrEqualTo $isGreaterThanOrEqualTo)
 * @method NotType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method NotType addIsLessThan(IsLessThan $isLessThan)
 * @method NotType setIsLessThan(array $isLessThan)
 * @method NotType addIsLessThanOrEqualTo(IsLessThanOrEqualTo $isLessThanOrEqualTo)
 * @method NotType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method NotType addAnd(AndElement $and)
 * @method NotType setAnd(array $and)
 * @method NotType addNot(Not $not)
 * @method NotType setNot(array $not)
 * @method NotType addOr(OrElement $or)
 * @method NotType setOr(array $or)
 */
class NotType extends SearchExpressionType
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
