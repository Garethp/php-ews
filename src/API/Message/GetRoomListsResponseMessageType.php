<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetRoomListsResponseMessageType
 *
 *
 * XSD Type: GetRoomListsResponseMessageType
 *
 * @method GetRoomListsResponseMessageType addRoomLists(\garethp\ews\API\Type\EmailAddressType $roomLists)
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $roomLists = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\EmailAddressType[]
     */
    public function getRoomLists()
    {
        return $this->roomLists;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\EmailAddressType[]
     * @return GetRoomListsResponseMessageType
     */
    public function setRoomLists(array $value)
    {
        $this->roomLists = $this->castValueIfNeeded("roomLists", $value);
        return $this;
    }
}
