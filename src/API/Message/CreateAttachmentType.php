<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method CreateAttachmentType setParentItemId(\garethp\ews\API\Type\ItemIdType $parentItemId)
 * @method CreateAttachmentType setAttachments(\garethp\ews\API\Type\NonEmptyArrayOfAttachmentsType $attachments)
 */
class CreateAttachmentType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $parentItemId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfAttachmentsType
     */
    protected $attachments = null;

    /**
     * @return \garethp\ews\API\Type\ItemIdType
     */
    public function getParentItemId()
    {
        return $this->parentItemId;
    }

    /**
     * @return \garethp\ews\API\Type\NonEmptyArrayOfAttachmentsType
     */
    public function getAttachments()
    {
        return $this->attachments;
    }
}
