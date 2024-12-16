<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SearchParametersType
 *
 *
 * XSD Type: SearchParametersType
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
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getTraversal()
    {
        return $this->traversal;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SearchParametersType
     */
    public function setTraversal($value)
    {
        $this->traversal = $this->castValueIfNeeded("traversal", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RestrictionType
     * @return SearchParametersType
     */
    public function setRestriction(RestrictionType $value)
    {
        $this->restriction = $this->castValueIfNeeded("restriction", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return NonEmptyArrayOfBaseFolderIdsType
     */
    public function getBaseFolderIds()
    {
        return $this->baseFolderIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value NonEmptyArrayOfBaseFolderIdsType
     * @return SearchParametersType
     */
    public function setBaseFolderIds(NonEmptyArrayOfBaseFolderIdsType $value)
    {
        $this->baseFolderIds = $this->castValueIfNeeded("baseFolderIds", $value);
        return $this;
    }
}
