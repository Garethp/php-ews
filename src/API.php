<?php

namespace garethp\ews;

use garethp\ews\API\ExchangeWebServices;
use garethp\ews\API\Message\EmptyFolderResponseType;
use garethp\ews\API\Message\GetServerTimeZonesType;
use garethp\ews\API\Message\SyncFolderItemsResponseMessageType;
use garethp\ews\API\Message\UpdateItemResponseMessageType;
use garethp\ews\API\Type;
use garethp\ews\API\Type\BaseFolderIdType;

/**
 * A base class for APIs
 *
 * Class BaseAPI
 * @package garethp\ews
 */
class API
{
    protected static $defaultClientOptions = array(
        'version' => ExchangeWebServices::VERSION_2010
    );

    public function __construct(ExchangeWebServices $client = null)
    {
        if ($client) {
            $this->setClient($client);
        }
    }

    /**
     * @return Type\EmailAddressType
     */
    public function getPrimarySmtpMailbox()
    {
        return $this->getClient()->getPrimarySmtpMailbox();
    }

    /**
     * Storing the API client
     * @var ExchangeWebServices
     */
    private $client;

    /**
     * Get a calendar item
     *
     * @param string $name
     * @return CalendarAPI
     */
    public function getCalendar($name = null)
    {
        $calendar = new CalendarAPI();
        $calendar->setClient($this->getClient());
        $calendar->pickCalendar($name);

        return $calendar;
    }

    /**
     * @param string $folderName
     * @return MailAPI
     */
    public function getMailbox($folderName = null)
    {
        $mailApi = new MailAPI();
        $mailApi->setClient($this->getClient());
        $mailApi->pickMailFolder($folderName);

        return $mailApi;
    }

    /**
     * Set the API client
     *
     * @param ExchangeWebServices $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the API client
     *
     * @return ExchangeWebServices
     */
    public function getClient()
    {
        return $this->client;
    }

    public static function withUsernameAndPassword($server, $username, $password, $options = [])
    {
        return new static(ExchangeWebServices::fromUsernameAndPassword(
            $server,
            $username,
            $password,
            array_replace_recursive(self::$defaultClientOptions, $options)
        ));
    }

    public static function withCallbackToken($server, $token, $options = [])
    {
        return new static(ExchangeWebServices::fromCallbackToken(
            $server,
            $token,
            array_replace_recursive(self::$defaultClientOptions, $options)
        ));
    }

    public static function withCustomAuthentication($server, $authentication, $options = [])
    {
        return new static(ExchangeWebServices::fromCustomAuthentication(
            $server,
            $authentication,
            array_replace_recursive(self::$defaultClientOptions, $options)
        ));
    }

    public function getPrimarySmptEmailAddress()
    {
        if ($this->getPrimarySmtpMailbox() == null) {
            return null;
        }

        return $this->getPrimarySmtpMailbox()->getEmailAddress();
    }

    public function setPrimarySmtpEmailAddress($emailAddress)
    {
        $this->getClient()->setPrimarySmtpEmailAddress($emailAddress);

        return $this;
    }

    /**
     * Create items through the API client
     *
     * @param $items
     * @param array $options
     * @return Type
     */
    public function createItems($items, $options = array())
    {
        $items = Utilities\ensureIsArray($items);
        $request = array(
            'Items' => $items
        );

        $request = array_replace_recursive($request, $options);
        $request = Type::buildFromArray($request);

        $response = $this->getClient()->CreateItem($request);

        return $response;
    }

    public function updateItems($items, $options = array())
    {
        $request = array(
            'ItemChanges' => $items,
            'MessageDisposition' => 'SaveOnly',
            'ConflictResolution' => 'AlwaysOverwrite'
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);

        $response = $this->getClient()->UpdateItem($request);
        if ($response instanceof UpdateItemResponseMessageType) {
            return $response->getItems();
        }

        return Utilities\ensureIsArray($response);
    }

    public function createCalendars($names, BaseFolderIdType $parentFolder = null, $options = array())
    {
        if ($parentFolder === null) {
            $parentFolder = $this->getDistinguishedFolderId('calendar');
        }

        return $this->createFolders($names, $parentFolder, $options, 'IPF.Appointment');
    }

    public function createContactsFolder($names, BaseFolderIdType $parentFolder = null, $options = array())
    {
        if ($parentFolder === null) {
            $parentFolder = $this->getDistinguishedFolderId('contacts');
        }

        return $this->createFolders($names, $parentFolder, $options, 'IPF.Contact');
    }

    public function createFolders($names, BaseFolderIdType $parentFolder, $options = array(), $folderClass = null)
    {
        $names = Utilities\ensureIsArray($names);
        $names = array_map(function ($name) use ($folderClass) {
            return ['DisplayName' => $name, 'FolderClass' => $folderClass];
        }, $names);

        $request = [
            'Folders' => ['Folder' => $names]
        ];

        if ($parentFolder !== null) {
            $request['ParentFolderId'] = $parentFolder->toArray(true);
        }

        $request = array_merge_recursive($request, $options);

        $this->client->CreateFolder($request);
        return true;
    }

    /**
     * @deprecated Please use API::deleteFolders() instead
     *
     * @param BaseFolderIdType $folderId
     * @param array $options
     * @return Type
     */
    public function deleteFolder(BaseFolderIdType $folderId, $options = array())
    {
        return $this->deleteFolders($folderId, $options);
    }

    public function deleteFolders($folders, $options = array())
    {
        $folderIds = Utilities\getFolderIds($folders);

        $request = [
            'DeleteType' => 'HardDelete',
            'FolderIds' => $folderIds
        ];

        $request = array_merge_recursive($request, $options);
        return $this->client->DeleteFolder($request);
    }

    public function moveItem(Type\ItemIdType $itemId, BaseFolderIdType $folderId, $options = array())
    {
        $request = array(
            'ToFolderId' => $folderId->toArray(true),
            'ItemIds' => array('ItemId' => $itemId->toArray())
        );

        $request = array_merge_recursive($request, $options);

        return $this->client->MoveItem($request);
    }

    /**
     * @param $items Type\ItemIdType|Type\ItemIdType[]
     * @param array $options
     * @return bool
     */
    public function deleteItems($items, $options = array())
    {
        $items = Utilities\ensureIsArray($items, true);

        $items = array_map(function ($item) {
            $item = Type\ItemIdType::buildFromArray($item);

            return $item->toArray();
        }, $items);

        $request = array(
            'ItemIds' => array('ItemId' => $items),
            'DeleteType' => 'MoveToDeletedItems'
        );

        $request = array_replace_recursive($request, $options);
        $request = Type::buildFromArray($request);
        $this->getClient()->DeleteItem($request);

        //If the delete fails, an Exception will be thrown in processResponse before it gets here
        return true;
    }

    /**
     * @param $identifier
     * @param array $options
     * @return Type\BaseFolderType
     */
    public function getFolder($identifier, $options = [])
    {
        $request = array(
            'FolderShape' => array(
                'BaseShape' => array('_' => 'Default')
            ),
            'FolderIds' => $identifier
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);

        $response = $this->getClient()->GetFolder($request);

        return $response;
    }

    /**
     * Get a folder by it's distinguishedId
     *
     * @param string $distinguishedId
     * @param array $options
     * @return Type\BaseFolderType
     */
    public function getFolderByDistinguishedId($distinguishedId, $options = [])
    {
        return $this->getFolder(array(
            'DistinguishedFolderId' => array(
                'Id' => $distinguishedId,
                'Mailbox' => $this->getPrimarySmtpMailbox()
            )
        ), $options);
    }

    /**
     * @param string|BaseFolderIdType $folderId
     * @param array $options
     * @return Type\BaseFolderType
     * @throws API\Exception
     */
    public function getFolderByFolderId($folderId, $options = [])
    {
        if (is_string($folderId)) {
            $folderId = ['FolderId' => ['Id' => $folderId, 'Mailbox' => $this->getPrimarySmtpMailbox()]];
        } else {
            $folderId = $folderId->toArray(true);
        }

        return $this->getFolder($folderId, $options);
    }

    /**
     * @param string|BaseFolderIdType $parentFolderId
     * @param array $options
     * @return Type\BaseFolderType[]
     */
    public function getChildrenFolders($parentFolderId = 'root', array $options = array())
    {
        if (is_string($parentFolderId)) {
            $parentFolderId = $this->getDistinguishedFolderId($parentFolderId);
        }

        $request = array(
            'Traversal' => 'Shallow',
            'FolderShape' => array(
                'BaseShape' => 'AllProperties'
            ),
            'ParentFolderIds' => $parentFolderId->toArray(true)
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);

        /** @var \garethp\ews\API\Message\FindFolderResponseMessageType $folders */
        return $this->getClient()->FindFolder($request);
    }

    /**
     * @param string $folderName
     * @param string|BaseFolderIdType $parentFolderId
     * @param array $options
     * @return bool|Type\BaseFolderType
     */
    public function getFolderByDisplayName($folderName, $parentFolderId = 'root', $options = array())
    {
        $folders = $this->getChildrenFolders($parentFolderId, $options);

        foreach ($folders as $folder) {
            if ($folder->getDisplayName() === $folderName) {
                return $folder;
            }
        }

        return false;
    }

    /**
     * @param $itemId array|Type\ItemIdType
     * @param array $options
     * @return Type
     */
    public function getItem($itemId, $options = array())
    {
        if ($itemId instanceof Type\ItemIdType) {
            $itemId = $itemId->toArray();
        }

        $request = array(
            'ItemShape' => array('BaseShape' => 'AllProperties'),
            'ItemIds' => array('ItemId' => $itemId)
        );

        $request = array_replace_recursive($request, $options);

        return $this->getClient()->GetItem($request);
    }

    /**
     * Get a list of sync changes on a folder
     *
     * @param BaseFolderIdType $folderId
     * @param null $syncState
     * @param array $options
     * @return SyncFolderItemsResponseMessageType
     */
    public function listItemChanges($folderId, $syncState = null, array $options = array())
    {
        $request = array(
            'ItemShape' => array('BaseShape' => 'AllProperties'),
            'SyncFolderId' => $folderId->toArray(true),
            'SyncScope' => 'NormalItems',
            'MaxChangesReturned' => '100'
        );

        if ($syncState != null) {
            $request['SyncState'] = $syncState;
            $request['ItemShape']['BaseShape'] = 'AllProperties';
        }

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->SyncFolderItems($request);

        return $response;
    }

    public function getServerTimezones($timezoneIDs = array(), $fullTimezoneData = false)
    {
        $request = GetServerTimeZonesType::buildFromArray(array(
            'returnFullTimeZoneData' => $fullTimezoneData
        ));

        if (!empty($timezoneIDs)) {
            $request->setIds($timezoneIDs);
        }

        $timezones = $this->getClient()->GetServerTimeZones($request);
        return Utilities\ensureIsArray($timezones);
    }

    /**
     * @param Type\ItemIdType $itemId
     * @param $fromType
     * @param $destinationType
     * @param $mailbox
     *
     * @return Type\ItemIdType
     */
    public function convertIdFormat(Type\ItemIdType $itemId, $fromType, $destinationType, $mailbox)
    {
        $result = $this->getClient()->ConvertId(array(
            'DestinationFormat' => $destinationType,
            'SourceIds' => array(
                'AlternateId' => array(
                    'Format' => $fromType,
                    'Id' => $itemId->getId(),
                    'Mailbox' => $mailbox
                )
            )
        ));

        $itemId->setId($result->getId());

        return $itemId;
    }

    /**
     * @param Type\FindItemParentType|Type\FindFolderParentType $result
     *
     * @return Type\FindItemParentType|Type\FindFolderParentType
     */
    public function getNextPage($result)
    {
        if ($result->isIncludesLastItemInRange()) {
            return $result;
        }

        $currentPage = $result->getCurrentPage();
        $currentPage->setOffset($result->getIndexedPagingOffset());

        $lastRequest = $result->getLastRequest();
        $lastRequest->setIndexedPage($currentPage);

        if ($result instanceof Type\FindFolderParentType) {
            return $this->getClient()->FindFolder($lastRequest);
        }

        return $this->getClient()->FindItem($lastRequest);
    }

    /**
     * @param BaseFolderIdType $folderId
     * @param string $deleteType
     * @param bool $deleteSubFolders
     * @param array $options
     * @return EmptyFolderResponseType
     */
    public function emptyFolder(
        BaseFolderIdType $folderId,
        $deleteType = 'SoftDelete',
        $deleteSubFolders = false,
        array $options = []
    ) {
        $request = [
            'DeleteType' => $deleteType,
            'DeleteSubFolders' => $deleteSubFolders,
            'FolderIds' => $folderId->toArray(true)
        ];

        $request = array_merge_recursive($request, $options);

        return $this->getClient()->EmptyFolder($request);
    }

    protected function getDistinguishedFolderId($id = null, $changeKey = null)
    {
        return new Type\DistinguishedFolderIdType(
            $id,
            $changeKey,
            $this->getPrimarySmtpMailbox()
        );
    }
}
