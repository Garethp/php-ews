<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfAttachmentsType
 *
 *
 * XSD Type: ArrayOfAttachmentsType
 *
 * @method ArrayOfAttachmentsType addItemAttachment(ItemAttachmentType $itemAttachment)
 * @method ArrayOfAttachmentsType setItemAttachment(array $itemAttachment)
 * @method ArrayOfAttachmentsType addFileAttachment(FileAttachmentType $fileAttachment)
 * @method ArrayOfAttachmentsType setFileAttachment(array $fileAttachment)
 */
class ArrayOfAttachmentsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemAttachmentType[]
     */
    protected $itemAttachment = null;

    /**
     * @var \garethp\ews\API\Type\FileAttachmentType[]
     */
    protected $fileAttachment = null;

    /**
     * @return ItemAttachmentType[]
     */
    public function getItemAttachment()
    {
        return $this->itemAttachment;
    }

    /**
     * @return FileAttachmentType[]
     */
    public function getFileAttachment()
    {
        return $this->fileAttachment;
    }
}
