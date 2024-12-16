<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsType
 *
 * Request type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsType
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
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\UserMailboxType
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function addMailboxes(\garethp\ews\API\Type\UserMailboxType $value)
    {
        $value = $this->castValueIfNeeded("mailboxes", $value);

        if ($this->mailboxes === null) {
            $this->mailboxes = array();
        }

        if (!is_array($this->mailboxes)) {
            $this->mailboxes = array($this->mailboxes);
        }

        $this->mailboxes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\UserMailboxType[]
     */
    public function getMailboxes()
    {
        return $this->mailboxes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\UserMailboxType[]
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setMailboxes(array $value)
    {
        $this->mailboxes = $this->castValueIfNeeded("mailboxes", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function addKeywords($value)
    {
        $value = $this->castValueIfNeeded("keywords", $value);

        if ($this->keywords === null) {
            $this->keywords = array();
        }

        if (!is_array($this->keywords)) {
            $this->keywords = array($this->keywords);
        }

        $this->keywords[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setKeywords(array $value)
    {
        $this->keywords = $this->castValueIfNeeded("keywords", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setLanguage($value)
    {
        $this->language = $this->castValueIfNeeded("language", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function addSenders($value)
    {
        $value = $this->castValueIfNeeded("senders", $value);

        if ($this->senders === null) {
            $this->senders = array();
        }

        if (!is_array($this->senders)) {
            $this->senders = array($this->senders);
        }

        $this->senders[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getSenders()
    {
        return $this->senders;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setSenders(array $value)
    {
        $this->senders = $this->castValueIfNeeded("senders", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function addRecipients($value)
    {
        $value = $this->castValueIfNeeded("recipients", $value);

        if ($this->recipients === null) {
            $this->recipients = array();
        }

        if (!is_array($this->recipients)) {
            $this->recipients = array($this->recipients);
        }

        $this->recipients[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setRecipients(array $value)
    {
        $this->recipients = $this->castValueIfNeeded("recipients", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setFromDate(\DateTime|string $value)
    {
        $this->fromDate = $this->castValueIfNeeded("fromDate", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setToDate(\DateTime|string $value)
    {
        $this->toDate = $this->castValueIfNeeded("toDate", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function addMessageTypes($value)
    {
        $value = $this->castValueIfNeeded("messageTypes", $value);

        if ($this->messageTypes === null) {
            $this->messageTypes = array();
        }

        if (!is_array($this->messageTypes)) {
            $this->messageTypes = array($this->messageTypes);
        }

        $this->messageTypes[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string[]
     */
    public function getMessageTypes()
    {
        return $this->messageTypes;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setMessageTypes(array $value)
    {
        $this->messageTypes = $this->castValueIfNeeded("messageTypes", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isSearchDumpster()
    {
        return ((bool) $this->searchDumpster);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getSearchDumpster()
    {
        return $this->searchDumpster;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setSearchDumpster($value)
    {
        $this->searchDumpster = $this->castValueIfNeeded("searchDumpster", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isIncludePersonalArchive()
    {
        return ((bool) $this->includePersonalArchive);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIncludePersonalArchive()
    {
        return $this->includePersonalArchive;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setIncludePersonalArchive($value)
    {
        $this->includePersonalArchive = $this->castValueIfNeeded("includePersonalArchive", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isIncludeUnsearchableItems()
    {
        return ((bool) $this->includeUnsearchableItems);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getIncludeUnsearchableItems()
    {
        return $this->includeUnsearchableItems;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return FindMailboxStatisticsByKeywordsType
     */
    public function setIncludeUnsearchableItems($value)
    {
        $this->includeUnsearchableItems = $this->castValueIfNeeded("includeUnsearchableItems", $value);
        return $this;
    }
}
