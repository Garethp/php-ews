<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetRoomListsResponseMessageType
 *
 *
 * XSD Type: GetRoomListsResponseMessageType
 *
 * @method GetRoomListsResponseMessageType addRoomLists(\garethp\ews\API\Type\EmailAddressType $roomLists)
 * @method GetRoomListsResponseMessageType setRoomLists(array $roomLists)
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $roomLists = null;

    /**
     * @return \garethp\ews\API\Type\EmailAddressType[]
     */
    public function getRoomLists()
    {
        return $this->roomLists;
    }
}
