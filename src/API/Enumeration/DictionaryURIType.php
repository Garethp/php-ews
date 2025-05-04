<?php

namespace garethp\ews\API\Enumeration;

use garethp\ews\API\Enumeration;

/**
 * Class representing DictionaryURIType
 *
 *
 * XSD Type: DictionaryURIType
 */
class DictionaryURIType extends Enumeration
{

    const CONTACTS_EMAIL_ADDRESS = 'contacts:EmailAddress';

    const CONTACTS_IM_ADDRESS = 'contacts:ImAddress';

    const CONTACTS_PHONE_NUMBER = 'contacts:PhoneNumber';

    const CONTACTS_PHYSICAL_ADDRESS_CITY = 'contacts:PhysicalAddress:City';

    const CONTACTS_PHYSICAL_ADDRESS_POSTAL_CODE = 'contacts:PhysicalAddress:PostalCode';

    const CONTACTS_PHYSICAL_ADDRESS_STATE = 'contacts:PhysicalAddress:State';

    const CONTACTS_PHYSICAL_ADDRESS_STREET = 'contacts:PhysicalAddress:Street';

    const DISTRIBUTION_LIST_MEMBERS_MEMBER = 'distributionlist:Members:Member';

    const ITEM_INTERNET_MESSAGE_HEADER = 'item:InternetMessageHeader';

    const CONTACTS_PHYSICAL_ADDRESS_COUNTRY_OR_REGION = 'contacts:PhysicalAddress:CountryOrRegion';

    const DISTRIBUTIONLIST_MEMBERS_MEMBER = 'distributionlist:Members:Member';
}
