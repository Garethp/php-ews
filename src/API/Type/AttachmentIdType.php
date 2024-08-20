<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AttachmentIdType
 *
 *
 * XSD Type: AttachmentIdType
 *
 * @method AttachmentIdType setRootItemId(string $rootItemId)
 * @method AttachmentIdType setRootItemChangeKey(string $rootItemChangeKey)
 */
class AttachmentIdType extends RequestAttachmentIdType
{

    /**
     * @var string
     */
    protected $rootItemId = null;

    /**
     * @var string
     */
    protected $rootItemChangeKey = null;

    /**
     * @return string
     */
    public function getRootItemId()
    {
        return $this->rootItemId;
    }

    /**
     * @return string
     */
    public function getRootItemChangeKey()
    {
        return $this->rootItemChangeKey;
    }
}
