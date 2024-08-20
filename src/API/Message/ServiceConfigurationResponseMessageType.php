<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method ServiceConfigurationResponseMessageType setMailTipsConfiguration(\garethp\ews\API\Type\MailTipsServiceConfigurationType $mailTipsConfiguration)
 * @method ServiceConfigurationResponseMessageType setUnifiedMessagingConfiguration(\garethp\ews\API\Type\UnifiedMessageServiceConfigurationType $unifiedMessagingConfiguration)
 * @method ServiceConfigurationResponseMessageType setProtectionRulesConfiguration(\garethp\ews\API\Type\ProtectionRulesServiceConfigurationType $protectionRulesConfiguration)
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
     * @return \garethp\ews\API\Type\MailTipsServiceConfigurationType
     */
    public function getMailTipsConfiguration()
    {
        return $this->mailTipsConfiguration;
    }

    /**
     * @return \garethp\ews\API\Type\UnifiedMessageServiceConfigurationType
     */
    public function getUnifiedMessagingConfiguration()
    {
        return $this->unifiedMessagingConfiguration;
    }

    /**
     * @return \garethp\ews\API\Type\ProtectionRulesServiceConfigurationType
     */
    public function getProtectionRulesConfiguration()
    {
        return $this->protectionRulesConfiguration;
    }
}
