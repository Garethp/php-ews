<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
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
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\AttachmentResponseShapeType
     */
    public function getAttachmentShape()
    {
        return $this->attachmentShape;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\AttachmentResponseShapeType
     * @return GetAttachmentType
     */
    public function setAttachmentShape(\garethp\ews\API\Type\AttachmentResponseShapeType $value)
    {
        $this->attachmentShape = $this->castValueIfNeeded("attachmentShape", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\RequestAttachmentIdType
     * @return GetAttachmentType
     */
    public function addAttachmentIds(\garethp\ews\API\Type\RequestAttachmentIdType $value)
    {
        $value = $this->castValueIfNeeded("attachmentIds", $value);

        if ($this->attachmentIds === null) {
            $this->attachmentIds = array();
        }

        if (!is_array($this->attachmentIds)) {
            $this->attachmentIds = array($this->attachmentIds);
        }

        $this->attachmentIds[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\RequestAttachmentIdType[]
     */
    public function getAttachmentIds()
    {
        return $this->attachmentIds;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\RequestAttachmentIdType[]
     * @return GetAttachmentType
     */
    public function setAttachmentIds(array $value)
    {
        $this->attachmentIds = $this->castValueIfNeeded("attachmentIds", $value);
        return $this;
    }
}
