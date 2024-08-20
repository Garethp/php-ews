<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ArrayOfTrackingPropertiesType
 *
 *
 * XSD Type: ArrayOfTrackingPropertiesType
 *
 * @method ArrayOfTrackingPropertiesType addTrackingPropertyType(TrackingPropertyType $trackingPropertyType)
 * @method ArrayOfTrackingPropertiesType setTrackingPropertyType(array $trackingPropertyType)
 */
class ArrayOfTrackingPropertiesType extends Type
{

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $trackingPropertyType = null;

    /**
     * @return TrackingPropertyType[]
     */
    public function getTrackingPropertyType()
    {
        return $this->trackingPropertyType;
    }
}
