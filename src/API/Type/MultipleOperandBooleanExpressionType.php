<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MultipleOperandBooleanExpressionType
 *
 *
 * XSD Type: MultipleOperandBooleanExpressionType
 *
 * @method MultipleOperandBooleanExpressionType addContains(Contains $contains)
 * @method MultipleOperandBooleanExpressionType setContains(array $contains)
 * @method MultipleOperandBooleanExpressionType addExcludes(Excludes $excludes)
 * @method MultipleOperandBooleanExpressionType setExcludes(array $excludes)
 * @method MultipleOperandBooleanExpressionType addExists(Exists $exists)
 * @method MultipleOperandBooleanExpressionType setExists(array $exists)
 * @method MultipleOperandBooleanExpressionType addIsEqualTo(IsEqualTo $isEqualTo)
 * @method MultipleOperandBooleanExpressionType setIsEqualTo(array $isEqualTo)
 * @method MultipleOperandBooleanExpressionType addIsNotEqualTo(IsNotEqualTo $isNotEqualTo)
 * @method MultipleOperandBooleanExpressionType setIsNotEqualTo(array $isNotEqualTo)
 * @method MultipleOperandBooleanExpressionType addIsGreaterThan(IsGreaterThan $isGreaterThan)
 * @method MultipleOperandBooleanExpressionType setIsGreaterThan(array $isGreaterThan)
 * @method MultipleOperandBooleanExpressionType addIsGreaterThanOrEqualTo(IsGreaterThanOrEqualTo $isGreaterThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType addIsLessThan(IsLessThan $isLessThan)
 * @method MultipleOperandBooleanExpressionType setIsLessThan(array $isLessThan)
 * @method MultipleOperandBooleanExpressionType addIsLessThanOrEqualTo(IsLessThanOrEqualTo $isLessThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType addAnd(AndElement $and)
 * @method MultipleOperandBooleanExpressionType setAnd(array $and)
 * @method MultipleOperandBooleanExpressionType addNot(Not $not)
 * @method MultipleOperandBooleanExpressionType setNot(array $not)
 * @method MultipleOperandBooleanExpressionType addOr(OrElement $or)
 * @method MultipleOperandBooleanExpressionType setOr(array $or)
 */
class MultipleOperandBooleanExpressionType extends SearchExpressionType
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
