<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportRequestType
 *
 *
 * XSD Type: GetMessageTrackingReportRequestType
 *
 * @method GetMessageTrackingReportRequestType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
 */
class GetMessageTrackingReportRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $scope = null;

    /**
     * @var string
     */
    protected $reportTemplate = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $recipientFilter = null;

    /**
     * @var string
     */
    protected $messageTrackingReportId = null;

    /**
     * @var boolean
     */
    protected $returnQueueEvents = null;

    /**
     * @var string
     */
    protected $diagnosticsLevel = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetMessageTrackingReportRequestType
     */
    public function setScope($value)
    {
        $this->scope = $this->castValueIfNeeded("scope", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetMessageTrackingReportRequestType
     */
    public function setReportTemplate($value)
    {
        $this->reportTemplate = $this->castValueIfNeeded("reportTemplate", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getRecipientFilter()
    {
        return $this->recipientFilter;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\EmailAddressType
     * @return GetMessageTrackingReportRequestType
     */
    public function setRecipientFilter(\garethp\ews\API\Type\EmailAddressType $value)
    {
        $this->recipientFilter = $this->castValueIfNeeded("recipientFilter", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getMessageTrackingReportId()
    {
        return $this->messageTrackingReportId;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetMessageTrackingReportRequestType
     */
    public function setMessageTrackingReportId($value)
    {
        $this->messageTrackingReportId = $this->castValueIfNeeded("messageTrackingReportId", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return bool
     */
    public function isReturnQueueEvents()
    {
        return ((bool) $this->returnQueueEvents);
    }

    /**
     * @autogenerated This method is safe to replace
     * @return boolean
     */
    public function getReturnQueueEvents()
    {
        return $this->returnQueueEvents;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value bool
     * @return GetMessageTrackingReportRequestType
     */
    public function setReturnQueueEvents($value)
    {
        $this->returnQueueEvents = $this->castValueIfNeeded("returnQueueEvents", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return string
     */
    public function getDiagnosticsLevel()
    {
        return $this->diagnosticsLevel;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return GetMessageTrackingReportRequestType
     */
    public function setDiagnosticsLevel($value)
    {
        $this->diagnosticsLevel = $this->castValueIfNeeded("diagnosticsLevel", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\TrackingPropertyType[]
     * @return GetMessageTrackingReportRequestType
     */
    public function setProperties(array $value)
    {
        $this->properties = $this->castValueIfNeeded("properties", $value);
        return $this;
    }
}
