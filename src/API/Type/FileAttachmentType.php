<?php

namespace garethp\ews\API\Type;

/**
 * Class representing FileAttachmentType
 *
 *
 * XSD Type: FileAttachmentType
 *
 * @method boolean getIsContactPhoto()
 * @method FileAttachmentType setIsContactPhoto(boolean $isContactPhoto)
 * @method string getContent()
 * @method FileAttachmentType setContent(string $content)
 */
class FileAttachmentType extends AttachmentType
{

    /**
     * @var boolean
     */
    protected $isContactPhoto = null;

    /**
     * @var string
     */
    protected $content = null;

    /**
     * @returns bool
     */
    public function isContactPhoto()
    {
        return ((bool) $this->isContactPhoto);
    }
}
