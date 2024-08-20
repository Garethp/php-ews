<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetServerTimeZonesType
 *
 *
 * XSD Type: GetServerTimeZonesType
 *
 * @method GetServerTimeZonesType setReturnFullTimeZoneData(boolean $returnFullTimeZoneData)
 * @method GetServerTimeZonesType addIds(string $ids)
 * @method GetServerTimeZonesType setIds(array $ids)
 */
class GetServerTimeZonesType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $returnFullTimeZoneData = null;

    /**
     * @var string[]
     */
    protected $ids = null;

    /**
     * @returns bool
     */
    public function isReturnFullTimeZoneData()
    {
        return ((bool) $this->returnFullTimeZoneData);
    }

    /**
     * @return boolean
     */
    public function getReturnFullTimeZoneData()
    {
        return $this->returnFullTimeZoneData;
    }

    /**
     * @return string[]
     */
    public function getIds()
    {
        return $this->ids;
    }
}
