<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Enumeration\DistinguishedFolderIdNameType;
use garethp\ews\API\ExchangeWebServices;
use garethp\ews\API\Type;
use garethp\ews\API\Type\DistinguishedFolderIdType;

$ews = ExchangeWebServices::withUsernameAndPassword('server', 'username', 'password');

// This request searches for mail items in INBOX folder that were already replied-to
// and their subject or body contains a specific keyword or search phrase. The results
// are ordered by message received time and paginated with 10 items per page.
// It could be used as an example how to do a Restrictions-search on multiple fields
// including extended properties search.
$request = array(
    'Traversal' => 'Shallow',
    'ItemShape' => array(
        'BaseShape' => 'AllProperties',
        'AdditionalProperties' => [
            'ExtendedFieldURI' => [
                [
                    // PID_TAG_FLAG_STATUS - used to get flag status of a message
                    'PropertyTag' => 0x1090,
                    'PropertyType' => 'Integer',
                ],
                [
                    // PID_TAG_ICON_INDEX - used to get suggested icon state of the message - e.g. was it replied or not
                    'PropertyTag' => 0x1080,
                    'PropertyType' => 'Integer',
                ],
            ]
        ],
    ),
    // pagination
    'IndexedPageItemView' => [
        'MaxEntriesReturned' => 10,
        'Offset' => 0,
        'BasePoint' => 'Beginning',
    ],
    // sorting by a specific property
    'SortOrder' => [
        'FieldOrder' => [
            'Order' => 'Ascending',
            'FieldURI' => [
                'FieldURI' => 'item:DateTimeReceived',
            ],
        ]
    ],
    // search - might be advanced query syntax or via restrictions
    'Restriction' => [
        'And' => [
            // search only replied-to messages
            'IsNotEqualTo' => [
                'ExtendedFieldURI' => [
                    'PropertyTag' => 0x1080,
                    'PropertyType' => 'Integer',
                ],
                'FieldURIOrConstant' => [
                    'Constant' => ['Value' => 0x00000105],
                ],
            ],
            'Or' => [
                [
                    'Contains' => [
                        'ContainmentMode' => 'Substring',
                        'ContainmentComparison' => 'IgnoreCase',
                        'FieldURI' => ['FieldURI' => 'item:Subject'],
                        'Constant' => ['Value' => 'KEYWORD-HERE'],
                    ],
                ],
                [
                    'Contains' => [
                        'ContainmentMode' => 'Substring',
                        'ContainmentComparison' => 'IgnoreCase',
                        'FieldURI' => ['FieldURI' => 'item:Body'],
                        'Constant' => ['Value' => 'KEYWORD-HERE'],
                    ],
                ],
            ]
        ],
    ],
    'ParentFolderIds' => (new DistinguishedFolderIdType(DistinguishedFolderIdNameType::INBOX))->toArray(true)
);
$request = Type::buildFromArray($request);
$resp = $ews->FindItem($request);
