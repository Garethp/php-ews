<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Enumeration\IndexBasePointType;

/**
 * Class representing IndexedPageViewType
 *
 *
 * XSD Type: IndexedPageViewType
 *
 * @method integer getOffset()
 * @method IndexedPageViewType setOffset(integer $offset)
 * @method string getBasePoint()
 * @method IndexedPageViewType setBasePoint(string $basePoint)
 */
class IndexedPageViewType extends BasePagingType
{

    /**
     * @var integer
     */
    protected $offset = null;

    /**
     * @var string
     */
    protected $basePoint = null;

    public function __construct($maxEntries = 100, $offset = 0, $basePoint = 'Beginning')
    {
        $this->maxEntriesReturned = $maxEntries;
        $this->offset = $offset;
        $this->basePoint = $basePoint;
    }
}
