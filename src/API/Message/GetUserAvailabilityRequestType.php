<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method GetUserAvailabilityRequestType setTimeZone(\garethp\ews\API\Type\TimeZone $timeZone)
 * @method GetUserAvailabilityRequestType addMailboxDataArray(\garethp\ews\API\Type\MailboxDataType $mailboxDataArray)
 * @method GetUserAvailabilityRequestType setMailboxDataArray(array $mailboxDataArray)
 * @method GetUserAvailabilityRequestType setFreeBusyViewOptions(\garethp\ews\API\Type\FreeBusyViewOptions $freeBusyViewOptions)
 * @method GetUserAvailabilityRequestType setSuggestionsViewOptions(\garethp\ews\API\Type\SuggestionsViewOptions $suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\TimeZone
     */
    protected $timeZone = null;

    /**
     * @var \garethp\ews\API\Type\MailboxDataType[]
     */
    protected $mailboxDataArray = null;

    /**
     * @var \garethp\ews\API\Type\FreeBusyViewOptions
     */
    protected $freeBusyViewOptions = null;

    /**
     * @var \garethp\ews\API\Type\SuggestionsViewOptions
     */
    protected $suggestionsViewOptions = null;

    /**
     * @return \garethp\ews\API\Type\TimeZone
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @return \garethp\ews\API\Type\MailboxDataType[]
     */
    public function getMailboxDataArray()
    {
        return $this->mailboxDataArray;
    }

    /**
     * @return \garethp\ews\API\Type\FreeBusyViewOptions
     */
    public function getFreeBusyViewOptions()
    {
        return $this->freeBusyViewOptions;
    }

    /**
     * @return \garethp\ews\API\Type\SuggestionsViewOptions
     */
    public function getSuggestionsViewOptions()
    {
        return $this->suggestionsViewOptions;
    }
}
