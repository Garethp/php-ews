<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing SuggestionsResponseType
 *
 *
 * XSD Type: SuggestionsResponseType
 *
 * @method SuggestionsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method SuggestionsResponseType addSuggestionDayResultArray(\garethp\ews\API\Type\SuggestionDayResultType $suggestionDayResultArray)
 * @method SuggestionsResponseType setSuggestionDayResultArray(array $suggestionDayResultArray)
 */
class SuggestionsResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \garethp\ews\API\Type\SuggestionDayResultType[]
     */
    protected $suggestionDayResultArray = null;

    /**
     * @return ResponseMessageType
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * @return \garethp\ews\API\Type\SuggestionDayResultType[]
     */
    public function getSuggestionDayResultArray()
    {
        return $this->suggestionDayResultArray;
    }
}
