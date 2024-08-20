<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteItemType
 *
 *
 * XSD Type: DeleteItemType
 *
 * @method DeleteItemType setDeleteType(string $deleteType)
 * @method DeleteItemType setSendMeetingCancellations(string $sendMeetingCancellations)
 * @method DeleteItemType setAffectedTaskOccurrences(string $affectedTaskOccurrences)
 * @method DeleteItemType setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
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
}
