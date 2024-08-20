<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method GetAttachmentType setAttachmentShape(\garethp\ews\API\Type\AttachmentResponseShapeType $attachmentShape)
 * @method GetAttachmentType addAttachmentIds(\garethp\ews\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method GetAttachmentType setAttachmentIds(array $attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\AttachmentResponseShapeType
     */
    protected $attachmentShape = null;

    /**
     * @var \garethp\ews\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;

    /**
     * @return \garethp\ews\API\Type\AttachmentResponseShapeType
     */
    public function getAttachmentShape()
    {
        return $this->attachmentShape;
    }

    /**
     * @return \garethp\ews\API\Type\RequestAttachmentIdType[]
     */
    public function getAttachmentIds()
    {
        return $this->attachmentIds;
    }
}
