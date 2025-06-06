<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SuggestionType
 *
 *
 * XSD Type: Suggestion
 */
class SuggestionType extends Type
{

    /**
     * @var \DateTime
     */
    protected $meetingTime = null;

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
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getMeetingTime()
    {
        return $this->meetingTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return SuggestionType
     */
    public function setMeetingTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->meetingTime = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isWorkTime()
    {
        return ((bool) $this->isWorkTime);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIsWorkTime()
    {
        return $this->isWorkTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return SuggestionType
     */
    public function setIsWorkTime($value)
    {
        $this->isWorkTime = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getSuggestionQuality()
    {
        return $this->suggestionQuality;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return SuggestionType
     */
    public function setSuggestionQuality($value)
    {
        $this->suggestionQuality = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ArrayOfAttendeeConflictDataType
     */
    public function getAttendeeConflictDataArray()
    {
        return $this->attendeeConflictDataArray;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ArrayOfAttendeeConflictDataType
     * @return SuggestionType
     */
    public function setAttendeeConflictDataArray(ArrayOfAttendeeConflictDataType $value)
    {
        $this->attendeeConflictDataArray = $value;
        return $this;
    }
}
