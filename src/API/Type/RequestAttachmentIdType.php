<?php

namespace garethp\ews\API\Type;

/**
 * Class representing RequestAttachmentIdType
 *
 *
 * XSD Type: RequestAttachmentIdType
 *
 * @method RequestAttachmentIdType setId(string $id)
 */
class RequestAttachmentIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
