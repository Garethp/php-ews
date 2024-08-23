<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing OccurrenceInfoType
 *
 *
 * XSD Type: OccurrenceInfoType
 */
class OccurrenceInfoType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \DateTime
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $end = null;

    /**
     * @var \DateTime
     */
    protected $originalStart = null;

    /**
     * @return ItemIdType
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalStart()
    {
        return $this->originalStart;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemIdType
     * @return OccurrenceInfoType
     */
    public function setItemId(ItemIdType $value)
    {
        $this->itemId = $this->castValueIfNeeded("itemId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return OccurrenceInfoType
     */
    public function setStart(\DateTime|string $value)
    {
        $this->start = $this->castValueIfNeeded("start", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return OccurrenceInfoType
     */
    public function setEnd(\DateTime|string $value)
    {
        $this->end = $this->castValueIfNeeded("end", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return OccurrenceInfoType
     */
    public function setOriginalStart(\DateTime|string $value)
    {
        $this->originalStart = $this->castValueIfNeeded("originalStart", $value);
        return $this;
    }
}
