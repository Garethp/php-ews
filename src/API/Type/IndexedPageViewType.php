<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Enumeration\IndexBasePointType;

/**
 * Class representing IndexedPageViewType
 *
 *
 * XSD Type: IndexedPageViewType
 *
 * @method IndexedPageViewType setOffset(integer $offset)
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

    /**
     * @return integer
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return string
     */
    public function getBasePoint()
    {
        return $this->basePoint;
    }
}
