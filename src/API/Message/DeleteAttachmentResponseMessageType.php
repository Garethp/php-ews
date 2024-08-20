<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteAttachmentResponseMessageType
 *
 *
 * XSD Type: DeleteAttachmentResponseMessageType
 *
 * @method DeleteAttachmentResponseMessageType setRootItemId(\garethp\ews\API\Type\RootItemIdType $rootItemId)
 */
class DeleteAttachmentResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\RootItemIdType
     */
    protected $rootItemId = null;

    /**
     * @return \garethp\ews\API\Type\RootItemIdType
     */
    public function getRootItemId()
    {
        return $this->rootItemId;
    }
}
