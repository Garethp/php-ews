<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method FindMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method FindMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method FindMessageTrackingReportResponseMessageType addMessageTrackingSearchResults(\garethp\ews\API\Type\FindMessageTrackingSearchResultType $messageTrackingSearchResults)
 * @method FindMessageTrackingReportResponseMessageType setMessageTrackingSearchResults(array $messageTrackingSearchResults)
 * @method FindMessageTrackingReportResponseMessageType setExecutedSearchScope(string $executedSearchScope)
 * @method FindMessageTrackingReportResponseMessageType addErrors(\garethp\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method FindMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method FindMessageTrackingReportResponseMessageType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
 * @method FindMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \garethp\ews\API\Type\FindMessageTrackingSearchResultType[]
     */
    protected $messageTrackingSearchResults = null;

    /**
     * @var string
     */
    protected $executedSearchScope = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;

    /**
     * @return string[]
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }

    /**
     * @return \garethp\ews\API\Type\FindMessageTrackingSearchResultType[]
     */
    public function getMessageTrackingSearchResults()
    {
        return $this->messageTrackingSearchResults;
    }

    /**
     * @return string
     */
    public function getExecutedSearchScope()
    {
        return $this->executedSearchScope;
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
