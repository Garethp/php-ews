<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SuggestionDayResultType
 *
 *
 * XSD Type: SuggestionDayResult
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
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return SuggestionDayResultType
     */
    public function setDate(\DateTime|string $value)
    {
        $this->date = $this->castValueIfNeeded("date", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDayQuality()
    {
        return $this->dayQuality;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SuggestionDayResultType
     */
    public function setDayQuality($value)
    {
        $this->dayQuality = $this->castValueIfNeeded("dayQuality", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SuggestionType
     * @return SuggestionDayResultType
     */
    public function addSuggestionArray(SuggestionType $value)
    {
        $value = $this->castValueIfNeeded("suggestionArray", $value);

        if ($this->suggestionArray === null) {
            $this->suggestionArray = array();
        }

        if (!is_array($this->suggestionArray)) {
            $this->suggestionArray = array($this->suggestionArray);
        }

        $this->suggestionArray[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SuggestionType[]
     */
    public function getSuggestionArray()
    {
        return $this->suggestionArray;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SuggestionType[]
     * @return SuggestionDayResultType
     */
    public function setSuggestionArray(array $value)
    {
        $this->suggestionArray = $this->castValueIfNeeded("suggestionArray", $value);
        return $this;
    }
}
