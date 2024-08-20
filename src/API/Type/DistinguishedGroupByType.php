<?php

namespace garethp\ews\API\Type;

/**
 * Class representing DistinguishedGroupByType
 *
 * Allows consumers to access standard groupings for FindItem queries. This is in
 *  contrast to the arbitrary (custom) groupings available via the t:GroupByType
 * XSD Type: DistinguishedGroupByType
 *
 * @method DistinguishedGroupByType setStandardGroupBy(string $standardGroupBy)
 */
class DistinguishedGroupByType extends BaseGroupByType
{

    /**
     * @var string
     */
    protected $standardGroupBy = null;

    /**
     * @return string
     */
    public function getStandardGroupBy()
    {
        return $this->standardGroupBy;
    }
}
