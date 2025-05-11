<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing InvalidRecipientResponseCodeType
 *
 * Represents the message keys that can be returned for invalid recipients
 * XSD Type: InvalidRecipientResponseCodeType
 */
class InvalidRecipientResponseCodeType extends Enumeration
{

    const CANNOT_OBTAIN_TOKEN_FROM_STS = 'CannotObtainTokenFromSTS';

    const OTHER = 'OtherError';

    const RECIPIENT_ORG_FEDERATED_UNKNOWN_TOKEN_ISSUER = 'RecipientOrganizationFederatedWithUnknownTokenIssuer';

    const RECIPIENT_ORG_NOT_FEDERATED = 'RecipientOrganizationNotFederated';

    const SYSTEM_POLICY_BLOCKS_SHARING_WITH_RECIPIENT = 'SystemPolicyBlocksSharingWithThisRecipient';

    const OTHER_ERROR = 'OtherError';

    const RECIPIENT_ORGANIZATION_NOT_FEDERATED = 'RecipientOrganizationNotFederated';

    const SYSTEM_POLICY_BLOCKS_SHARING_WITH_THIS_RECIPIENT = 'SystemPolicyBlocksSharingWithThisRecipient';

    const RECIPIENT_ORGANIZATION_FEDERATED_WITH_UNKNOWN_TOKEN_ISSUER = 'RecipientOrganizationFederatedWithUnknownTokenIssuer';
}
