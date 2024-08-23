<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method FindMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method FindMessageTrackingReportResponseMessageType addMessageTrackingSearchResults(\garethp\ews\API\Type\FindMessageTrackingSearchResultType $messageTrackingSearchResults)
 * @method FindMessageTrackingReportResponseMessageType addErrors(\garethp\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method FindMessageTrackingReportResponseMessageType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value string[]
     * @return FindMessageTrackingReportResponseMessageType
     */
    public function setDiagnostics(array $value)
    {
        $this->diagnostics = $this->castValueIfNeeded("diagnostics", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\FindMessageTrackingSearchResultType[]
     * @return FindMessageTrackingReportResponseMessageType
     */
    public function setMessageTrackingSearchResults(array $value)
    {
        $this->messageTrackingSearchResults = $this->castValueIfNeeded("messageTrackingSearchResults", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value string
     * @return FindMessageTrackingReportResponseMessageType
     */
    public function setExecutedSearchScope($value)
    {
        $this->executedSearchScope = $this->castValueIfNeeded("executedSearchScope", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ArrayOfTrackingPropertiesType[]
     * @return FindMessageTrackingReportResponseMessageType
     */
    public function setErrors(array $value)
    {
        $this->errors = $this->castValueIfNeeded("errors", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\TrackingPropertyType[]
     * @return FindMessageTrackingReportResponseMessageType
     */
    public function setProperties(array $value)
    {
        $this->properties = $this->castValueIfNeeded("properties", $value);
        return $this;
    }
}
