<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing ArrayOfResponseMessagesType
 *
 *
 * XSD Type: ArrayOfResponseMessagesType
 *
 * @method ArrayOfResponseMessagesType addCreateItemResponseMessage(ItemInfoResponseMessageType $createItemResponseMessage)
 * @method ArrayOfResponseMessagesType setCreateItemResponseMessage(array $createItemResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteItemResponseMessage(ResponseMessageType $deleteItemResponseMessage)
 * @method ArrayOfResponseMessagesType setDeleteItemResponseMessage(array $deleteItemResponseMessage)
 * @method ArrayOfResponseMessagesType addGetItemResponseMessage(ItemInfoResponseMessageType $getItemResponseMessage)
 * @method ArrayOfResponseMessagesType setGetItemResponseMessage(array $getItemResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateItemResponseMessage(UpdateItemResponseMessageType $updateItemResponseMessage)
 * @method ArrayOfResponseMessagesType setUpdateItemResponseMessage(array $updateItemResponseMessage)
 * @method ArrayOfResponseMessagesType addSendItemResponseMessage(ResponseMessageType $sendItemResponseMessage)
 * @method ArrayOfResponseMessagesType setSendItemResponseMessage(array $sendItemResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteFolderResponseMessage(ResponseMessageType $deleteFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setDeleteFolderResponseMessage(array $deleteFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addEmptyFolderResponseMessage(ResponseMessageType $emptyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setEmptyFolderResponseMessage(array $emptyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateFolderResponseMessage(FolderInfoResponseMessageType $createFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setCreateFolderResponseMessage(array $createFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetFolderResponseMessage(FolderInfoResponseMessageType $getFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setGetFolderResponseMessage(array $getFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addFindFolderResponseMessage(FindFolderResponseMessageType $findFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setFindFolderResponseMessage(array $findFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateFolderResponseMessage(FolderInfoResponseMessageType $updateFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setUpdateFolderResponseMessage(array $updateFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveFolderResponseMessage(FolderInfoResponseMessageType $moveFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setMoveFolderResponseMessage(array $moveFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyFolderResponseMessage(FolderInfoResponseMessageType $copyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setCopyFolderResponseMessage(array $copyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateAttachmentResponseMessage(AttachmentInfoResponseMessageType $createAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType setCreateAttachmentResponseMessage(array $createAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteAttachmentResponseMessage(DeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType setDeleteAttachmentResponseMessage(array $deleteAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addGetAttachmentResponseMessage(AttachmentInfoResponseMessageType $getAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType setGetAttachmentResponseMessage(array $getAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addUploadItemsResponseMessage(UploadItemsResponseMessageType $uploadItemsResponseMessage)
 * @method ArrayOfResponseMessagesType setUploadItemsResponseMessage(array $uploadItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addExportItemsResponseMessage(ExportItemsResponseMessageType $exportItemsResponseMessage)
 * @method ArrayOfResponseMessagesType setExportItemsResponseMessage(array $exportItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addFindItemResponseMessage(FindItemResponseMessageType $findItemResponseMessage)
 * @method ArrayOfResponseMessagesType setFindItemResponseMessage(array $findItemResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveItemResponseMessage(ItemInfoResponseMessageType $moveItemResponseMessage)
 * @method ArrayOfResponseMessagesType setMoveItemResponseMessage(array $moveItemResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyItemResponseMessage(ItemInfoResponseMessageType $copyItemResponseMessage)
 * @method ArrayOfResponseMessagesType setCopyItemResponseMessage(array $copyItemResponseMessage)
 * @method ArrayOfResponseMessagesType addResolveNamesResponseMessage(ResolveNamesResponseMessageType $resolveNamesResponseMessage)
 * @method ArrayOfResponseMessagesType setResolveNamesResponseMessage(array $resolveNamesResponseMessage)
 * @method ArrayOfResponseMessagesType addExpandDLResponseMessage(ExpandDLResponseMessageType $expandDLResponseMessage)
 * @method ArrayOfResponseMessagesType setExpandDLResponseMessage(array $expandDLResponseMessage)
 * @method ArrayOfResponseMessagesType addGetServerTimeZonesResponseMessage(GetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage)
 * @method ArrayOfResponseMessagesType setGetServerTimeZonesResponseMessage(array $getServerTimeZonesResponseMessage)
 * @method ArrayOfResponseMessagesType addGetEventsResponseMessage(GetEventsResponseMessageType $getEventsResponseMessage)
 * @method ArrayOfResponseMessagesType setGetEventsResponseMessage(array $getEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetStreamingEventsResponseMessage(GetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage)
 * @method ArrayOfResponseMessagesType setGetStreamingEventsResponseMessage(array $getStreamingEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addSubscribeResponseMessage(SubscribeResponseMessageType $subscribeResponseMessage)
 * @method ArrayOfResponseMessagesType setSubscribeResponseMessage(array $subscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addUnsubscribeResponseMessage(ResponseMessageType $unsubscribeResponseMessage)
 * @method ArrayOfResponseMessagesType setUnsubscribeResponseMessage(array $unsubscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addSendNotificationResponseMessage(SendNotificationResponseMessageType $sendNotificationResponseMessage)
 * @method ArrayOfResponseMessagesType setSendNotificationResponseMessage(array $sendNotificationResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderHierarchyResponseMessage(SyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage)
 * @method ArrayOfResponseMessagesType setSyncFolderHierarchyResponseMessage(array $syncFolderHierarchyResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderItemsResponseMessage(SyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage)
 * @method ArrayOfResponseMessagesType setSyncFolderItemsResponseMessage(array $syncFolderItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateManagedFolderResponseMessage(FolderInfoResponseMessageType $createManagedFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setCreateManagedFolderResponseMessage(array $createManagedFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addConvertIdResponseMessage(ConvertIdResponseMessageType $convertIdResponseMessage)
 * @method ArrayOfResponseMessagesType setConvertIdResponseMessage(array $convertIdResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingMetadataResponseMessage(GetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage)
 * @method ArrayOfResponseMessagesType setGetSharingMetadataResponseMessage(array $getSharingMetadataResponseMessage)
 * @method ArrayOfResponseMessagesType addRefreshSharingFolderResponseMessage(RefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setRefreshSharingFolderResponseMessage(array $refreshSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingFolderResponseMessage(GetSharingFolderResponseMessageType $getSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType setGetSharingFolderResponseMessage(array $getSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateUserConfigurationResponseMessage(ResponseMessageType $createUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType setCreateUserConfigurationResponseMessage(array $createUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteUserConfigurationResponseMessage(ResponseMessageType $deleteUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType setDeleteUserConfigurationResponseMessage(array $deleteUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetUserConfigurationResponseMessage(GetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType setGetUserConfigurationResponseMessage(array $getUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateUserConfigurationResponseMessage(ResponseMessageType $updateUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType setUpdateUserConfigurationResponseMessage(array $updateUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetRoomListsResponse(GetRoomListsResponseMessageType $getRoomListsResponse)
 * @method ArrayOfResponseMessagesType setGetRoomListsResponse(array $getRoomListsResponse)
 * @method ArrayOfResponseMessagesType addGetRoomsResponse(GetRoomsResponseMessageType $getRoomsResponse)
 * @method ArrayOfResponseMessagesType setGetRoomsResponse(array $getRoomsResponse)
 * @method ArrayOfResponseMessagesType addApplyConversationActionResponseMessage(ResponseMessageType $applyConversationActionResponseMessage)
 * @method ArrayOfResponseMessagesType setApplyConversationActionResponseMessage(array $applyConversationActionResponseMessage)
 * @method ArrayOfResponseMessagesType addFindMailboxStatisticsByKeywordsResponseMessage(FindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage)
 * @method ArrayOfResponseMessagesType setFindMailboxStatisticsByKeywordsResponseMessage(array $findMailboxStatisticsByKeywordsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetPasswordExpirationDateResponse(GetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse)
 * @method ArrayOfResponseMessagesType setGetPasswordExpirationDateResponse(array $getPasswordExpirationDateResponse)
 */
class ArrayOfResponseMessagesType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $createItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $deleteItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $getItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\UpdateItemResponseMessageType[]
     */
    protected $updateItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $sendItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $deleteFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $emptyFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $createFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $getFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FindFolderResponseMessageType[]
     */
    protected $findFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $updateFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $moveFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $copyFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\AttachmentInfoResponseMessageType[]
     */
    protected $createAttachmentResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\DeleteAttachmentResponseMessageType[]
     */
    protected $deleteAttachmentResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\AttachmentInfoResponseMessageType[]
     */
    protected $getAttachmentResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\UploadItemsResponseMessageType[]
     */
    protected $uploadItemsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ExportItemsResponseMessageType[]
     */
    protected $exportItemsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FindItemResponseMessageType[]
     */
    protected $findItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $moveItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $copyItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResolveNamesResponseMessageType[]
     */
    protected $resolveNamesResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ExpandDLResponseMessageType[]
     */
    protected $expandDLResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetServerTimeZonesResponseMessageType[]
     */
    protected $getServerTimeZonesResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetEventsResponseMessageType[]
     */
    protected $getEventsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetStreamingEventsResponseMessageType[]
     */
    protected $getStreamingEventsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\SubscribeResponseMessageType[]
     */
    protected $subscribeResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $unsubscribeResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\SendNotificationResponseMessageType[]
     */
    protected $sendNotificationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\SyncFolderHierarchyResponseMessageType[]
     */
    protected $syncFolderHierarchyResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\SyncFolderItemsResponseMessageType[]
     */
    protected $syncFolderItemsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $createManagedFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ConvertIdResponseMessageType[]
     */
    protected $convertIdResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetSharingMetadataResponseMessageType[]
     */
    protected $getSharingMetadataResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\RefreshSharingFolderResponseMessageType[]
     */
    protected $refreshSharingFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetSharingFolderResponseMessageType[]
     */
    protected $getSharingFolderResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $createUserConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $deleteUserConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetUserConfigurationResponseMessageType[]
     */
    protected $getUserConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $updateUserConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetRoomListsResponseMessageType[]
     */
    protected $getRoomListsResponse = null;

    /**
     * @var \garethp\ews\API\Message\GetRoomsResponseMessageType[]
     */
    protected $getRoomsResponse = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $applyConversationActionResponseMessage = null;

    /**
     * @var
     * \garethp\ews\API\Message\FindMailboxStatisticsByKeywordsResponseMessageType[]
     */
    protected $findMailboxStatisticsByKeywordsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetPasswordExpirationDateResponseMessageType[]
     */
    protected $getPasswordExpirationDateResponse = null;

    /**
     * @return ItemInfoResponseMessageType[]
     */
    public function getCreateItemResponseMessage()
    {
        return $this->createItemResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getDeleteItemResponseMessage()
    {
        return $this->deleteItemResponseMessage;
    }

    /**
     * @return ItemInfoResponseMessageType[]
     */
    public function getGetItemResponseMessage()
    {
        return $this->getItemResponseMessage;
    }

    /**
     * @return UpdateItemResponseMessageType[]
     */
    public function getUpdateItemResponseMessage()
    {
        return $this->updateItemResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getSendItemResponseMessage()
    {
        return $this->sendItemResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getDeleteFolderResponseMessage()
    {
        return $this->deleteFolderResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getEmptyFolderResponseMessage()
    {
        return $this->emptyFolderResponseMessage;
    }

    /**
     * @return FolderInfoResponseMessageType[]
     */
    public function getCreateFolderResponseMessage()
    {
        return $this->createFolderResponseMessage;
    }

    /**
     * @return FolderInfoResponseMessageType[]
     */
    public function getGetFolderResponseMessage()
    {
        return $this->getFolderResponseMessage;
    }

    /**
     * @return FindFolderResponseMessageType[]
     */
    public function getFindFolderResponseMessage()
    {
        return $this->findFolderResponseMessage;
    }

    /**
     * @return FolderInfoResponseMessageType[]
     */
    public function getUpdateFolderResponseMessage()
    {
        return $this->updateFolderResponseMessage;
    }

    /**
     * @return FolderInfoResponseMessageType[]
     */
    public function getMoveFolderResponseMessage()
    {
        return $this->moveFolderResponseMessage;
    }

    /**
     * @return FolderInfoResponseMessageType[]
     */
    public function getCopyFolderResponseMessage()
    {
        return $this->copyFolderResponseMessage;
    }

    /**
     * @return AttachmentInfoResponseMessageType[]
     */
    public function getCreateAttachmentResponseMessage()
    {
        return $this->createAttachmentResponseMessage;
    }

    /**
     * @return DeleteAttachmentResponseMessageType[]
     */
    public function getDeleteAttachmentResponseMessage()
    {
        return $this->deleteAttachmentResponseMessage;
    }

    /**
     * @return AttachmentInfoResponseMessageType[]
     */
    public function getGetAttachmentResponseMessage()
    {
        return $this->getAttachmentResponseMessage;
    }

    /**
     * @return UploadItemsResponseMessageType[]
     */
    public function getUploadItemsResponseMessage()
    {
        return $this->uploadItemsResponseMessage;
    }

    /**
     * @return ExportItemsResponseMessageType[]
     */
    public function getExportItemsResponseMessage()
    {
        return $this->exportItemsResponseMessage;
    }

    /**
     * @return FindItemResponseMessageType[]
     */
    public function getFindItemResponseMessage()
    {
        return $this->findItemResponseMessage;
    }

    /**
     * @return ItemInfoResponseMessageType[]
     */
    public function getMoveItemResponseMessage()
    {
        return $this->moveItemResponseMessage;
    }

    /**
     * @return ItemInfoResponseMessageType[]
     */
    public function getCopyItemResponseMessage()
    {
        return $this->copyItemResponseMessage;
    }

    /**
     * @return ResolveNamesResponseMessageType[]
     */
    public function getResolveNamesResponseMessage()
    {
        return $this->resolveNamesResponseMessage;
    }

    /**
     * @return ExpandDLResponseMessageType[]
     */
    public function getExpandDLResponseMessage()
    {
        return $this->expandDLResponseMessage;
    }

    /**
     * @return GetServerTimeZonesResponseMessageType[]
     */
    public function getGetServerTimeZonesResponseMessage()
    {
        return $this->getServerTimeZonesResponseMessage;
    }

    /**
     * @return GetEventsResponseMessageType[]
     */
    public function getGetEventsResponseMessage()
    {
        return $this->getEventsResponseMessage;
    }

    /**
     * @return GetStreamingEventsResponseMessageType[]
     */
    public function getGetStreamingEventsResponseMessage()
    {
        return $this->getStreamingEventsResponseMessage;
    }

    /**
     * @return SubscribeResponseMessageType[]
     */
    public function getSubscribeResponseMessage()
    {
        return $this->subscribeResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getUnsubscribeResponseMessage()
    {
        return $this->unsubscribeResponseMessage;
    }

    /**
     * @return SendNotificationResponseMessageType[]
     */
    public function getSendNotificationResponseMessage()
    {
        return $this->sendNotificationResponseMessage;
    }

    /**
     * @return SyncFolderHierarchyResponseMessageType[]
     */
    public function getSyncFolderHierarchyResponseMessage()
    {
        return $this->syncFolderHierarchyResponseMessage;
    }

    /**
     * @return SyncFolderItemsResponseMessageType[]
     */
    public function getSyncFolderItemsResponseMessage()
    {
        return $this->syncFolderItemsResponseMessage;
    }

    /**
     * @return FolderInfoResponseMessageType[]
     */
    public function getCreateManagedFolderResponseMessage()
    {
        return $this->createManagedFolderResponseMessage;
    }

    /**
     * @return ConvertIdResponseMessageType[]
     */
    public function getConvertIdResponseMessage()
    {
        return $this->convertIdResponseMessage;
    }

    /**
     * @return GetSharingMetadataResponseMessageType[]
     */
    public function getGetSharingMetadataResponseMessage()
    {
        return $this->getSharingMetadataResponseMessage;
    }

    /**
     * @return RefreshSharingFolderResponseMessageType[]
     */
    public function getRefreshSharingFolderResponseMessage()
    {
        return $this->refreshSharingFolderResponseMessage;
    }

    /**
     * @return GetSharingFolderResponseMessageType[]
     */
    public function getGetSharingFolderResponseMessage()
    {
        return $this->getSharingFolderResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getCreateUserConfigurationResponseMessage()
    {
        return $this->createUserConfigurationResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getDeleteUserConfigurationResponseMessage()
    {
        return $this->deleteUserConfigurationResponseMessage;
    }

    /**
     * @return GetUserConfigurationResponseMessageType[]
     */
    public function getGetUserConfigurationResponseMessage()
    {
        return $this->getUserConfigurationResponseMessage;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getUpdateUserConfigurationResponseMessage()
    {
        return $this->updateUserConfigurationResponseMessage;
    }

    /**
     * @return GetRoomListsResponseMessageType[]
     */
    public function getGetRoomListsResponse()
    {
        return $this->getRoomListsResponse;
    }

    /**
     * @return GetRoomsResponseMessageType[]
     */
    public function getGetRoomsResponse()
    {
        return $this->getRoomsResponse;
    }

    /**
     * @return ResponseMessageType[]
     */
    public function getApplyConversationActionResponseMessage()
    {
        return $this->applyConversationActionResponseMessage;
    }

    /**
     * @return FindMailboxStatisticsByKeywordsResponseMessageType[]
     */
    public function getFindMailboxStatisticsByKeywordsResponseMessage()
    {
        return $this->findMailboxStatisticsByKeywordsResponseMessage;
    }

    /**
     * @return GetPasswordExpirationDateResponseMessageType[]
     */
    public function getGetPasswordExpirationDateResponse()
    {
        return $this->getPasswordExpirationDateResponse;
    }
}
