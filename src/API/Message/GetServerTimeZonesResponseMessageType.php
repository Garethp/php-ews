<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetServerTimeZonesResponseMessageType
 *
 *
 * XSD Type: GetServerTimeZonesResponseMessageType
 *
 * @method GetServerTimeZonesResponseMessageType addTimeZoneDefinitions(\garethp\ews\API\Type\TimeZoneDefinitionType $timeZoneDefinitions)
 * @method GetServerTimeZonesResponseMessageType setTimeZoneDefinitions(array $timeZoneDefinitions)
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\TimeZoneDefinitionType[]
     */
    protected $timeZoneDefinitions = null;

    /**
     * @return \garethp\ews\API\Type\TimeZoneDefinitionType[]
     */
    public function getTimeZoneDefinitions()
    {
        return $this->timeZoneDefinitions;
    }
}
