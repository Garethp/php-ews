<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SuggestionType
 *
 *
 * XSD Type: Suggestion
 *
 * @method SuggestionType setMeetingTime(\DateTime $meetingTime)
 * @method SuggestionType setIsWorkTime(boolean $isWorkTime)
 * @method SuggestionType setSuggestionQuality(string $suggestionQuality)
 * @method SuggestionType setAttendeeConflictDataArray(ArrayOfAttendeeConflictDataType $attendeeConflictDataArray)
 */
class SuggestionType extends Type
{

    /**
     * @var \DateTime
     */
    protected $meetingTime = null;

    protected $_typeMap = array(
        'meetingTime' => 'dateTime',
    );

    /**
     * @var boolean
     */
    protected $isWorkTime = null;

    /**
     * @var string
     */
    protected $suggestionQuality = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfAttendeeConflictDataType
     */
    protected $attendeeConflictDataArray = null;

    /**
     * @return \DateTime
     */
    public function getMeetingTime()
    {
        return $this->meetingTime;
    }

    /**
     * @returns bool
     */
    public function isWorkTime()
    {
        return ((bool) $this->isWorkTime);
    }

    /**
     * @return boolean
     */
    public function getIsWorkTime()
    {
        return $this->isWorkTime;
    }

    /**
     * @return string
     */
    public function getSuggestionQuality()
    {
        return $this->suggestionQuality;
    }

    /**
     * @return ArrayOfAttendeeConflictDataType
     */
    public function getAttendeeConflictDataArray()
    {
        return $this->attendeeConflictDataArray;
    }
}
