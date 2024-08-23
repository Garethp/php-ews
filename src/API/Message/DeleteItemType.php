<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteItemType
 *
 *
 * XSD Type: DeleteItemType
 */
class DeleteItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var string
     */
    protected $sendMeetingCancellations = null;

    /**
     * @var string
     */
    protected $affectedTaskOccurrences = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @return string
     */
    public function getDeleteType()
    {
        return $this->deleteType;
    }

    /**
     * @return string
     */
    public function getSendMeetingCancellations()
    {
        return $this->sendMeetingCancellations;
    }

    /**
     * @return string
     */
    public function getAffectedTaskOccurrences()
    {
        return $this->affectedTaskOccurrences;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return DeleteItemType
     */
    public function setDeleteType($value)
    {
        $this->deleteType = $this->castValueIfNeeded("deleteType", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return DeleteItemType
     */
    public function setSendMeetingCancellations($value)
    {
        $this->sendMeetingCancellations = $this->castValueIfNeeded("sendMeetingCancellations", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return DeleteItemType
     */
    public function setAffectedTaskOccurrences($value)
    {
        $this->affectedTaskOccurrences = $this->castValueIfNeeded("affectedTaskOccurrences", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     * @return DeleteItemType
     */
    public function setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $value)
    {
        $this->itemIds = $this->castValueIfNeeded("itemIds", $value);
        return $this;
    }
}
