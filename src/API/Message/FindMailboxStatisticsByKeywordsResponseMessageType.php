<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * Response message type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * @method FindMailboxStatisticsByKeywordsResponseMessageType setMailboxStatisticsSearchResult(\garethp\ews\API\Type\MailboxStatisticsSearchResultType $mailboxStatisticsSearchResult)
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\MailboxStatisticsSearchResultType
     */
    protected $mailboxStatisticsSearchResult = null;

    /**
     * @return \garethp\ews\API\Type\MailboxStatisticsSearchResultType
     */
    public function getMailboxStatisticsSearchResult()
    {
        return $this->mailboxStatisticsSearchResult;
    }
}
