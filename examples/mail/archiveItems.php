<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Enumeration\DistinguishedFolderIdNameType;
use garethp\ews\API\ExchangeWebServices;
use garethp\ews\API\Type;
use garethp\ews\API\Type\DistinguishedFolderIdType;

$ews = ExchangeWebServices::withUsernameAndPassword('server', 'username', 'password');

$request = [
    'ArchiveSourceFolderId' => (new DistinguishedFolderIdType(DistinguishedFolderIdNameType::INBOX))->toArray(true),
    'ItemIds' => [
        'ItemId' => ['ItemID1', 'ItemID2'],
    ]
];
$request = Type::buildFromArray($request);
$result = $ews->ArchiveItem($request);
