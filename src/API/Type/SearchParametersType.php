<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SearchParametersType
 *
 *
 * XSD Type: SearchParametersType
 *
 * @method SearchParametersType setTraversal(string $traversal)
 * @method SearchParametersType setRestriction(RestrictionType $restriction)
 * @method SearchParametersType setBaseFolderIds(NonEmptyArrayOfBaseFolderIdsType $baseFolderIds)
 */
class SearchParametersType extends Type
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \garethp\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $baseFolderIds = null;

    /**
     * @return string
     */
    public function getTraversal()
    {
        return $this->traversal;
    }

    /**
     * @return RestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function getBaseFolderIds()
    {
        return $this->baseFolderIds;
    }
}
