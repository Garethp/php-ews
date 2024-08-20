<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsType
 *
 * Request type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsType
 *
 * @method FindMailboxStatisticsByKeywordsType addMailboxes(\garethp\ews\API\Type\UserMailboxType $mailboxes)
 * @method FindMailboxStatisticsByKeywordsType setMailboxes(array $mailboxes)
 * @method FindMailboxStatisticsByKeywordsType addKeywords(string $keywords)
 * @method FindMailboxStatisticsByKeywordsType setKeywords(array $keywords)
 * @method FindMailboxStatisticsByKeywordsType setLanguage(string $language)
 * @method FindMailboxStatisticsByKeywordsType addSenders(string $senders)
 * @method FindMailboxStatisticsByKeywordsType setSenders(array $senders)
 * @method FindMailboxStatisticsByKeywordsType addRecipients(string $recipients)
 * @method FindMailboxStatisticsByKeywordsType setRecipients(array $recipients)
 * @method FindMailboxStatisticsByKeywordsType setFromDate(\DateTime $fromDate)
 * @method FindMailboxStatisticsByKeywordsType setToDate(\DateTime $toDate)
 * @method FindMailboxStatisticsByKeywordsType addMessageTypes(string $messageTypes)
 * @method FindMailboxStatisticsByKeywordsType setMessageTypes(array $messageTypes)
 * @method FindMailboxStatisticsByKeywordsType setSearchDumpster(boolean $searchDumpster)
 * @method FindMailboxStatisticsByKeywordsType setIncludePersonalArchive(boolean $includePersonalArchive)
 * @method FindMailboxStatisticsByKeywordsType setIncludeUnsearchableItems(boolean $includeUnsearchableItems)
 */
class FindMailboxStatisticsByKeywordsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UserMailboxType[]
     */
    protected $mailboxes = null;

    /**
     * @var string[]
     */
    protected $keywords = null;

    /**
     * @var string
     */
    protected $language = null;

    /**
     * @var string[]
     */
    protected $senders = null;

    /**
     * @var string[]
     */
    protected $recipients = null;

    /**
     * @var \DateTime
     */
    protected $fromDate = null;

    protected $_typeMap = array(
        'fromDate' => 'dateTime',
        'toDate' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $toDate = null;

    /**
     * @var string[]
     */
    protected $messageTypes = null;

    /**
     * @var boolean
     */
    protected $searchDumpster = null;

    /**
     * @var boolean
     */
    protected $includePersonalArchive = null;

    /**
     * @var boolean
     */
    protected $includeUnsearchableItems = null;

    /**
     * @return \garethp\ews\API\Type\UserMailboxType[]
     */
    public function getMailboxes()
    {
        return $this->mailboxes;
    }

    /**
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string[]
     */
    public function getSenders()
    {
        return $this->senders;
    }

    /**
     * @return string[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * @return string[]
     */
    public function getMessageTypes()
    {
        return $this->messageTypes;
    }

    /**
     * @returns bool
     */
    public function isSearchDumpster()
    {
        return ((bool) $this->searchDumpster);
    }

    /**
     * @return boolean
     */
    public function getSearchDumpster()
    {
        return $this->searchDumpster;
    }

    /**
     * @returns bool
     */
    public function isIncludePersonalArchive()
    {
        return ((bool) $this->includePersonalArchive);
    }

    /**
     * @return boolean
     */
    public function getIncludePersonalArchive()
    {
        return $this->includePersonalArchive;
    }

    /**
     * @returns bool
     */
    public function isIncludeUnsearchableItems()
    {
        return ((bool) $this->includeUnsearchableItems);
    }

    /**
     * @return boolean
     */
    public function getIncludeUnsearchableItems()
    {
        return $this->includeUnsearchableItems;
    }
}
