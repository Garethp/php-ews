<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteAttachmentResponseMessageType
 *
 *
 * XSD Type: DeleteAttachmentResponseMessageType
 */
class DeleteAttachmentResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\RootItemIdType
     */
    protected $rootItemId = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\RootItemIdType
     */
    public function getRootItemId()
    {
        return $this->rootItemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\RootItemIdType
     * @return DeleteAttachmentResponseMessageType
     */
    public function setRootItemId(\garethp\ews\API\Type\RootItemIdType $value)
    {
        $this->rootItemId = $this->castValueIfNeeded("rootItemId", $value);
        return $this;
    }
}
