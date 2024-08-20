<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RecipientTrackingEventType
 *
 *
 * XSD Type: RecipientTrackingEventType
 *
 * @method RecipientTrackingEventType setDate(\DateTime $date)
 * @method RecipientTrackingEventType setRecipient(EmailAddressType $recipient)
 * @method RecipientTrackingEventType setDeliveryStatus(string $deliveryStatus)
 * @method RecipientTrackingEventType setEventDescription(string $eventDescription)
 * @method RecipientTrackingEventType addEventData(string $eventData)
 * @method RecipientTrackingEventType setEventData(array $eventData)
 * @method RecipientTrackingEventType setServer(string $server)
 * @method RecipientTrackingEventType setInternalId(integer $internalId)
 * @method RecipientTrackingEventType setBccRecipient(boolean $bccRecipient)
 * @method RecipientTrackingEventType setHiddenRecipient(boolean $hiddenRecipient)
 * @method RecipientTrackingEventType setUniquePathId(string $uniquePathId)
 * @method RecipientTrackingEventType setRootAddress(string $rootAddress)
 * @method RecipientTrackingEventType addProperties(TrackingPropertyType $properties)
 * @method RecipientTrackingEventType setProperties(array $properties)
 */
class RecipientTrackingEventType extends Type
{

    /**
     * @var \DateTime
     */
    protected $date = null;

    protected $_typeMap = array(
        'date' => 'dateTime',
    );

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $recipient = null;

    /**
     * @var string
     */
    protected $deliveryStatus = null;

    /**
     * @var string
     */
    protected $eventDescription = null;

    /**
     * @var string[]
     */
    protected $eventData = null;

    /**
     * @var string
     */
    protected $server = null;

    /**
     * @var integer
     */
    protected $internalId = null;

    /**
     * @var boolean
     */
    protected $bccRecipient = null;

    /**
     * @var boolean
     */
    protected $hiddenRecipient = null;

    /**
     * @var string
     */
    protected $uniquePathId = null;

    /**
     * @var string
     */
    protected $rootAddress = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return EmailAddressType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @return string
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * @return string[]
     */
    public function getEventData()
    {
        return $this->eventData;
    }

    /**
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @return integer
     */
    public function getInternalId()
    {
        return $this->internalId;
    }

    /**
     * @returns bool
     */
    public function isBccRecipient()
    {
        return ((bool) $this->bccRecipient);
    }

    /**
     * @return boolean
     */
    public function getBccRecipient()
    {
        return $this->bccRecipient;
    }

    /**
     * @returns bool
     */
    public function isHiddenRecipient()
    {
        return ((bool) $this->hiddenRecipient);
    }

    /**
     * @return boolean
     */
    public function getHiddenRecipient()
    {
        return $this->hiddenRecipient;
    }

    /**
     * @return string
     */
    public function getUniquePathId()
    {
        return $this->uniquePathId;
    }

    /**
     * @return string
     */
    public function getRootAddress()
    {
        return $this->rootAddress;
    }

    /**
     * @return TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
