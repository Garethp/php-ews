<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportRequestType
 *
 *
 * XSD Type: GetMessageTrackingReportRequestType
 *
 * @method GetMessageTrackingReportRequestType setScope(string $scope)
 * @method GetMessageTrackingReportRequestType setReportTemplate(string $reportTemplate)
 * @method GetMessageTrackingReportRequestType setRecipientFilter(\garethp\ews\API\Type\EmailAddressType $recipientFilter)
 * @method GetMessageTrackingReportRequestType setMessageTrackingReportId(string $messageTrackingReportId)
 * @method GetMessageTrackingReportRequestType setReturnQueueEvents(boolean $returnQueueEvents)
 * @method GetMessageTrackingReportRequestType setDiagnosticsLevel(string $diagnosticsLevel)
 * @method GetMessageTrackingReportRequestType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
 * @method GetMessageTrackingReportRequestType setProperties(array $properties)
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
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return string
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }

    /**
     * @return \garethp\ews\API\Type\EmailAddressType
     */
    public function getRecipientFilter()
    {
        return $this->recipientFilter;
    }

    /**
     * @return string
     */
    public function getMessageTrackingReportId()
    {
        return $this->messageTrackingReportId;
    }

    /**
     * @returns bool
     */
    public function isReturnQueueEvents()
    {
        return ((bool) $this->returnQueueEvents);
    }

    /**
     * @return boolean
     */
    public function getReturnQueueEvents()
    {
        return $this->returnQueueEvents;
    }

    /**
     * @return string
     */
    public function getDiagnosticsLevel()
    {
        return $this->diagnosticsLevel;
    }

    /**
     * @return \garethp\ews\API\Type\TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
