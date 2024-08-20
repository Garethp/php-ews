<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing GetUserAvailabilityResponseType
 *
 *
 * XSD Type: GetUserAvailabilityResponseType
 *
 * @method GetUserAvailabilityResponseType addFreeBusyResponseArray(FreeBusyResponseType $freeBusyResponseArray)
 * @method GetUserAvailabilityResponseType setFreeBusyResponseArray(array $freeBusyResponseArray)
 * @method GetUserAvailabilityResponseType setSuggestionsResponse(SuggestionsResponseType $suggestionsResponse)
 */
class GetUserAvailabilityResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\FreeBusyResponseType[]
     */
    protected $freeBusyResponseArray = null;

    /**
     * @var \garethp\ews\API\Message\SuggestionsResponseType
     */
    protected $suggestionsResponse = null;

    /**
     * @return FreeBusyResponseType[]
     */
    public function getFreeBusyResponseArray()
    {
        return $this->freeBusyResponseArray;
    }

    /**
     * @return SuggestionsResponseType
     */
    public function getSuggestionsResponse()
    {
        return $this->suggestionsResponse;
    }
}
