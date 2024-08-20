<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing KeywordStatisticsSearchResultType
 *
 * Keyword statistics search result.
 * XSD Type: KeywordStatisticsSearchResultType
 *
 * @method KeywordStatisticsSearchResultType setKeyword(string $keyword)
 * @method KeywordStatisticsSearchResultType setItemHits(integer $itemHits)
 * @method KeywordStatisticsSearchResultType setSize(integer $size)
 */
class KeywordStatisticsSearchResultType extends Type
{

    /**
     * @var string
     */
    protected $keyword = null;

    /**
     * @var integer
     */
    protected $itemHits = null;

    /**
     * @var integer
     */
    protected $size = null;

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @return integer
     */
    public function getItemHits()
    {
        return $this->itemHits;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }
}
