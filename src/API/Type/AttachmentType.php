<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing AttachmentType
 *
 *
 * XSD Type: AttachmentType
 *
 * @method AttachmentType setAttachmentId(AttachmentIdType $attachmentId)
 * @method AttachmentType setName(string $name)
 * @method AttachmentType setContentType(string $contentType)
 * @method AttachmentType setContentId(string $contentId)
 * @method AttachmentType setContentLocation(string $contentLocation)
 * @method AttachmentType setSize(integer $size)
 * @method AttachmentType setLastModifiedTime(\DateTime $lastModifiedTime)
 * @method AttachmentType setIsInline(boolean $isInline)
 */
class AttachmentType extends Type
{

    /**
     * @var \garethp\ews\API\Type\AttachmentIdType
     */
    protected $attachmentId = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $contentType = null;

    /**
     * @var string
     */
    protected $contentId = null;

    /**
     * @var string
     */
    protected $contentLocation = null;

    /**
     * @var integer
     */
    protected $size = null;

    /**
     * @var \DateTime
     */
    protected $lastModifiedTime = null;

    protected $_typeMap = array(
        'lastModifiedTime' => 'dateTime',
    );

    /**
     * @var boolean
     */
    protected $isInline = null;

    /**
     * @return AttachmentIdType
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @return string
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * @return string
     */
    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @returns bool
     */
    public function isInline()
    {
        return ((bool) $this->isInline);
    }

    /**
     * @return boolean
     */
    public function getIsInline()
    {
        return $this->isInline;
    }
}
