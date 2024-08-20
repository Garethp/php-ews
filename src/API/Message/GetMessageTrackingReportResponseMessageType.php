<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method GetMessageTrackingReportResponseMessageType setMessageTrackingReport(\garethp\ews\API\Type\MessageTrackingReportType $messageTrackingReport)
 * @method GetMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method GetMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method GetMessageTrackingReportResponseMessageType addErrors(\garethp\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method GetMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method GetMessageTrackingReportResponseMessageType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
 * @method GetMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\MessageTrackingReportType
     */
    protected $messageTrackingReport = null;

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;

    /**
     * @return \garethp\ews\API\Type\MessageTrackingReportType
     */
    public function getMessageTrackingReport()
    {
        return $this->messageTrackingReport;
    }

    /**
     * @return string[]
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }

    /**
     * @return \garethp\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return \garethp\ews\API\Type\TrackingPropertyType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
