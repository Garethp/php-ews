<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\MailTipsServiceConfigurationType
     */
    protected $mailTipsConfiguration = null;

    /**
     * @var \garethp\ews\API\Type\UnifiedMessageServiceConfigurationType
     */
    protected $unifiedMessagingConfiguration = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRulesServiceConfigurationType
     */
    protected $protectionRulesConfiguration = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\MailTipsServiceConfigurationType
     */
    public function getMailTipsConfiguration()
    {
        return $this->mailTipsConfiguration;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\MailTipsServiceConfigurationType
     * @return ServiceConfigurationResponseMessageType
     */
    public function setMailTipsConfiguration(\garethp\ews\API\Type\MailTipsServiceConfigurationType $value)
    {
        $this->mailTipsConfiguration = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\UnifiedMessageServiceConfigurationType
     */
    public function getUnifiedMessagingConfiguration()
    {
        return $this->unifiedMessagingConfiguration;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\UnifiedMessageServiceConfigurationType
     * @return ServiceConfigurationResponseMessageType
     */
    public function setUnifiedMessagingConfiguration(\garethp\ews\API\Type\UnifiedMessageServiceConfigurationType $value)
    {
        $this->unifiedMessagingConfiguration = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return \garethp\ews\API\Type\ProtectionRulesServiceConfigurationType
     */
    public function getProtectionRulesConfiguration()
    {
        return $this->protectionRulesConfiguration;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \garethp\ews\API\Type\ProtectionRulesServiceConfigurationType
     * @return ServiceConfigurationResponseMessageType
     */
    public function setProtectionRulesConfiguration(\garethp\ews\API\Type\ProtectionRulesServiceConfigurationType $value)
    {
        $this->protectionRulesConfiguration = $value;
        return $this;
    }
}
