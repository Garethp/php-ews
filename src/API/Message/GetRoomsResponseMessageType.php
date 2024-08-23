<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetRoomsResponseMessageType
 *
 *
 * XSD Type: GetRoomsResponseMessageType
 *
 * @method GetRoomsResponseMessageType addRooms(\garethp\ews\API\Type\RoomType $rooms)
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\RoomType[]
     */
    protected $rooms = null;

    /**
     * @return \garethp\ews\API\Type\RoomType[]
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\RoomType[]
     * @return GetRoomsResponseMessageType
     */
    public function setRooms(array $value)
    {
        $this->rooms = $this->castValueIfNeeded("rooms", $value);
        return $this;
    }
}
