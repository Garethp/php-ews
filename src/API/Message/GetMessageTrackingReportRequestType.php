<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportRequestType
 *
 *
 * XSD Type: GetMessageTrackingReportRequestType
 *
 * @method string getScope()
 * @method GetMessageTrackingReportRequestType setScope(string $scope)
 * @method string getReportTemplate()
 * @method GetMessageTrackingReportRequestType setReportTemplate(string $reportTemplate)
 * @method \garethp\ews\API\Type\EmailAddressType getRecipientFilter()
 * @method GetMessageTrackingReportRequestType setRecipientFilter(\garethp\ews\API\Type\EmailAddressType $recipientFilter)
 * @method string getMessageTrackingReportId()
 * @method GetMessageTrackingReportRequestType setMessageTrackingReportId(string $messageTrackingReportId)
 * @method boolean getReturnQueueEvents()
 * @method GetMessageTrackingReportRequestType setReturnQueueEvents(boolean $returnQueueEvents)
 * @method string getDiagnosticsLevel()
 * @method GetMessageTrackingReportRequestType setDiagnosticsLevel(string $diagnosticsLevel)
 * @method GetMessageTrackingReportRequestType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
 * @method \garethp\ews\API\Type\TrackingPropertyType[] getProperties()
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
     * @returns bool
     */
    public function isReturnQueueEvents()
    {
        return $this->returnQueueEvents && $this->returnQueueEvents;
    }
}
