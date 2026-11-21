<?php

use garethp\ews\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contact = $api->getContacts();

//Set extended properties with "ExtendedProperty": one property, or a list. Setting replaces any existing value.
$api->updateContactItem($contact[0]->getItemId(), array(
    'GivenName' => 'Jane',
    'ExtendedProperty' => array(
        array(
            //Custom property: property set + name
            'ExtendedFieldURI' => array(
                'DistinguishedPropertySetId' => 'PublicStrings',
                'PropertyName' => 'MyCustomProperty',
                'PropertyType' => 'String'
            ),
            'Value' => 'My custom value'
        ),
        array(
            //MAPI property: tag
            'ExtendedFieldURI' => array(
                'PropertyTag' => '0x3A4F',
                'PropertyType' => 'String'
            ),
            'Value' => 'Another value'
        )
    )
));

//Extended properties must be requested explicitly to be read back
$result = $api->getContact($contact[0]->getItemId(), array(
    'ItemShape' => array(
        'AdditionalProperties' => array(
            'ExtendedFieldURI' => array(
                'DistinguishedPropertySetId' => 'PublicStrings',
                'PropertyName' => 'MyCustomProperty',
                'PropertyType' => 'String'
            )
        )
    )
));

//Delete by adding its "ExtendedFieldURI" to "deleteFields"
$api->updateContactItem($contact[0]->getItemId(), array(
    'deleteFields' => array(
        array(
            'ExtendedFieldURI' => array(
                'DistinguishedPropertySetId' => 'PublicStrings',
                'PropertyName' => 'MyCustomProperty',
                'PropertyType' => 'String'
            )
        )
    )
));
