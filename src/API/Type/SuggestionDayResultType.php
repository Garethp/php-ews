<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SuggestionDayResultType
 *
 *
 * XSD Type: SuggestionDayResult
 *
 * @method SuggestionDayResultType setDate(\DateTime $date)
 * @method SuggestionDayResultType setDayQuality(string $dayQuality)
 * @method SuggestionDayResultType addSuggestionArray(SuggestionType $suggestionArray)
 * @method SuggestionDayResultType setSuggestionArray(array $suggestionArray)
 */
class SuggestionDayResultType extends Type
{

    /**
     * @var \DateTime
     */
    protected $date = null;

    protected $_typeMap = array(
        'date' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $dayQuality = null;

    /**
     * @var \garethp\ews\API\Type\SuggestionType[]
     */
    protected $suggestionArray = null;

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getDayQuality()
    {
        return $this->dayQuality;
    }

    /**
     * @return SuggestionType[]
     */
    public function getSuggestionArray()
    {
        return $this->suggestionArray;
    }
}
