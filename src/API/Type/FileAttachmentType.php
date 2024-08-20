<?php

namespace garethp\ews\API\Type;

/**
 * Class representing FileAttachmentType
 *
 *
 * XSD Type: FileAttachmentType
 *
 * @method FileAttachmentType setIsContactPhoto(boolean $isContactPhoto)
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

    /**
     * @return boolean
     */
    public function getIsContactPhoto()
    {
        return $this->isContactPhoto;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
