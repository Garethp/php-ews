<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing MailboxStatisticsSearchResultType
 *
 * Mailbox statistics search result.
 * XSD Type: MailboxStatisticsSearchResultType
 *
 * @method MailboxStatisticsSearchResultType setUserMailbox(UserMailboxType $userMailbox)
 * @method MailboxStatisticsSearchResultType setKeywordStatisticsSearchResult(KeywordStatisticsSearchResultType $keywordStatisticsSearchResult)
 */
class MailboxStatisticsSearchResultType extends Type
{

    /**
     * @var \garethp\ews\API\Type\UserMailboxType
     */
    protected $userMailbox = null;

    /**
     * @var \garethp\ews\API\Type\KeywordStatisticsSearchResultType
     */
    protected $keywordStatisticsSearchResult = null;

    /**
     * @return UserMailboxType
     */
    public function getUserMailbox()
    {
        return $this->userMailbox;
    }

    /**
     * @return KeywordStatisticsSearchResultType
     */
    public function getKeywordStatisticsSearchResult()
    {
        return $this->keywordStatisticsSearchResult;
    }
}
