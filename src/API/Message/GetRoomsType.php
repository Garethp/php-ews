<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetRoomsType
 *
 *
 * XSD Type: GetRoomsType
 *
 * @method GetRoomsType setRoomList(\garethp\ews\API\Type\EmailAddressType $roomList)
 */
class GetRoomsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $roomList = null;

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getRoomList()
    {
        return $this->roomList;
    }
}
