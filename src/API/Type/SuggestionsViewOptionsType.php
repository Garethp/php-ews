<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SuggestionsViewOptionsType
 *
 *
 * XSD Type: SuggestionsViewOptionsType
 *
 * @method SuggestionsViewOptionsType setGoodThreshold(integer $goodThreshold)
 * @method SuggestionsViewOptionsType setMaximumResultsByDay(integer $maximumResultsByDay)
 * @method SuggestionsViewOptionsType setMaximumNonWorkHourResultsByDay(integer $maximumNonWorkHourResultsByDay)
 * @method SuggestionsViewOptionsType setMeetingDurationInMinutes(integer $meetingDurationInMinutes)
 * @method SuggestionsViewOptionsType setMinimumSuggestionQuality(string $minimumSuggestionQuality)
 * @method SuggestionsViewOptionsType setDetailedSuggestionsWindow(DurationType $detailedSuggestionsWindow)
 * @method SuggestionsViewOptionsType setCurrentMeetingTime(\DateTime $currentMeetingTime)
 * @method SuggestionsViewOptionsType setGlobalObjectId(string $globalObjectId)
 */
class SuggestionsViewOptionsType extends Type
{

    /**
     * @var integer
     */
    protected $goodThreshold = null;

    /**
     * @var integer
     */
    protected $maximumResultsByDay = null;

    /**
     * @var integer
     */
    protected $maximumNonWorkHourResultsByDay = null;

    /**
     * @var integer
     */
    protected $meetingDurationInMinutes = null;

    /**
     * @var string
     */
    protected $minimumSuggestionQuality = null;

    /**
     * @var \garethp\ews\API\Type\DurationType
     */
    protected $detailedSuggestionsWindow = null;

    /**
     * @var \DateTime
     */
    protected $currentMeetingTime = null;

    protected $_typeMap = array(
        'currentMeetingTime' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $globalObjectId = null;

    /**
     * @return integer
     */
    public function getGoodThreshold()
    {
        return $this->goodThreshold;
    }

    /**
     * @return integer
     */
    public function getMaximumResultsByDay()
    {
        return $this->maximumResultsByDay;
    }

    /**
     * @return integer
     */
    public function getMaximumNonWorkHourResultsByDay()
    {
        return $this->maximumNonWorkHourResultsByDay;
    }

    /**
     * @return integer
     */
    public function getMeetingDurationInMinutes()
    {
        return $this->meetingDurationInMinutes;
    }

    /**
     * @return string
     */
    public function getMinimumSuggestionQuality()
    {
        return $this->minimumSuggestionQuality;
    }

    /**
     * @return DurationType
     */
    public function getDetailedSuggestionsWindow()
    {
        return $this->detailedSuggestionsWindow;
    }

    /**
     * @return \DateTime
     */
    public function getCurrentMeetingTime()
    {
        return $this->currentMeetingTime;
    }

    /**
     * @return string
     */
    public function getGlobalObjectId()
    {
        return $this->globalObjectId;
    }
}
