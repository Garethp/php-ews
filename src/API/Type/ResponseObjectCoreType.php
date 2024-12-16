<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ResponseObjectCoreType
 *
 * Internal abstract base type for reply objects.
 *  Should not appear in client code
 * XSD Type: ResponseObjectCoreType
 */
class ResponseObjectCoreType extends MessageType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $referenceItemId = null;

    /**
     * @autogenerated This method is safe to replace
     * @return ItemIdType
     */
    public function getReferenceItemId()
    {
        return $this->referenceItemId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return ResponseObjectCoreType
     */
    public function setReferenceItemId(ItemIdType $value)
    {
        $this->referenceItemId = $this->castValueIfNeeded("referenceItemId", $value);
        return $this;
    }
}
