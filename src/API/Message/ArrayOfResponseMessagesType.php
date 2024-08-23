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
 * @method ArrayOfResponseMessagesType addDeleteItemResponseMessage(ResponseMessageType $deleteItemResponseMessage)
 * @method ArrayOfResponseMessagesType addGetItemResponseMessage(ItemInfoResponseMessageType $getItemResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateItemResponseMessage(UpdateItemResponseMessageType $updateItemResponseMessage)
 * @method ArrayOfResponseMessagesType addSendItemResponseMessage(ResponseMessageType $sendItemResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteFolderResponseMessage(ResponseMessageType $deleteFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addEmptyFolderResponseMessage(ResponseMessageType $emptyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateFolderResponseMessage(FolderInfoResponseMessageType $createFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetFolderResponseMessage(FolderInfoResponseMessageType $getFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addFindFolderResponseMessage(FindFolderResponseMessageType $findFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateFolderResponseMessage(FolderInfoResponseMessageType $updateFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveFolderResponseMessage(FolderInfoResponseMessageType $moveFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyFolderResponseMessage(FolderInfoResponseMessageType $copyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateAttachmentResponseMessage(AttachmentInfoResponseMessageType $createAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteAttachmentResponseMessage(DeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addGetAttachmentResponseMessage(AttachmentInfoResponseMessageType $getAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addUploadItemsResponseMessage(UploadItemsResponseMessageType $uploadItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addExportItemsResponseMessage(ExportItemsResponseMessageType $exportItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addFindItemResponseMessage(FindItemResponseMessageType $findItemResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveItemResponseMessage(ItemInfoResponseMessageType $moveItemResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyItemResponseMessage(ItemInfoResponseMessageType $copyItemResponseMessage)
 * @method ArrayOfResponseMessagesType addResolveNamesResponseMessage(ResolveNamesResponseMessageType $resolveNamesResponseMessage)
 * @method ArrayOfResponseMessagesType addExpandDLResponseMessage(ExpandDLResponseMessageType $expandDLResponseMessage)
 * @method ArrayOfResponseMessagesType addGetServerTimeZonesResponseMessage(GetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage)
 * @method ArrayOfResponseMessagesType addGetEventsResponseMessage(GetEventsResponseMessageType $getEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetStreamingEventsResponseMessage(GetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addSubscribeResponseMessage(SubscribeResponseMessageType $subscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addUnsubscribeResponseMessage(ResponseMessageType $unsubscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addSendNotificationResponseMessage(SendNotificationResponseMessageType $sendNotificationResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderHierarchyResponseMessage(SyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderItemsResponseMessage(SyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateManagedFolderResponseMessage(FolderInfoResponseMessageType $createManagedFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addConvertIdResponseMessage(ConvertIdResponseMessageType $convertIdResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingMetadataResponseMessage(GetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage)
 * @method ArrayOfResponseMessagesType addRefreshSharingFolderResponseMessage(RefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingFolderResponseMessage(GetSharingFolderResponseMessageType $getSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateUserConfigurationResponseMessage(ResponseMessageType $createUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteUserConfigurationResponseMessage(ResponseMessageType $deleteUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetUserConfigurationResponseMessage(GetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateUserConfigurationResponseMessage(ResponseMessageType $updateUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetRoomListsResponse(GetRoomListsResponseMessageType $getRoomListsResponse)
 * @method ArrayOfResponseMessagesType addGetRoomsResponse(GetRoomsResponseMessageType $getRoomsResponse)
 * @method ArrayOfResponseMessagesType addApplyConversationActionResponseMessage(ResponseMessageType $applyConversationActionResponseMessage)
 * @method ArrayOfResponseMessagesType addFindMailboxStatisticsByKeywordsResponseMessage(FindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetPasswordExpirationDateResponse(GetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse)
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

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateItemResponseMessage(array $value)
    {
        $this->createItemResponseMessage = $this->castValueIfNeeded("createItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteItemResponseMessage(array $value)
    {
        $this->deleteItemResponseMessage = $this->castValueIfNeeded("deleteItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetItemResponseMessage(array $value)
    {
        $this->getItemResponseMessage = $this->castValueIfNeeded("getItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UpdateItemResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setUpdateItemResponseMessage(array $value)
    {
        $this->updateItemResponseMessage = $this->castValueIfNeeded("updateItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setSendItemResponseMessage(array $value)
    {
        $this->sendItemResponseMessage = $this->castValueIfNeeded("sendItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteFolderResponseMessage(array $value)
    {
        $this->deleteFolderResponseMessage = $this->castValueIfNeeded("deleteFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setEmptyFolderResponseMessage(array $value)
    {
        $this->emptyFolderResponseMessage = $this->castValueIfNeeded("emptyFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateFolderResponseMessage(array $value)
    {
        $this->createFolderResponseMessage = $this->castValueIfNeeded("createFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetFolderResponseMessage(array $value)
    {
        $this->getFolderResponseMessage = $this->castValueIfNeeded("getFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindFolderResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setFindFolderResponseMessage(array $value)
    {
        $this->findFolderResponseMessage = $this->castValueIfNeeded("findFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setUpdateFolderResponseMessage(array $value)
    {
        $this->updateFolderResponseMessage = $this->castValueIfNeeded("updateFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setMoveFolderResponseMessage(array $value)
    {
        $this->moveFolderResponseMessage = $this->castValueIfNeeded("moveFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setCopyFolderResponseMessage(array $value)
    {
        $this->copyFolderResponseMessage = $this->castValueIfNeeded("copyFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AttachmentInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateAttachmentResponseMessage(array $value)
    {
        $this->createAttachmentResponseMessage = $this->castValueIfNeeded("createAttachmentResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeleteAttachmentResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteAttachmentResponseMessage(array $value)
    {
        $this->deleteAttachmentResponseMessage = $this->castValueIfNeeded("deleteAttachmentResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AttachmentInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetAttachmentResponseMessage(array $value)
    {
        $this->getAttachmentResponseMessage = $this->castValueIfNeeded("getAttachmentResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UploadItemsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setUploadItemsResponseMessage(array $value)
    {
        $this->uploadItemsResponseMessage = $this->castValueIfNeeded("uploadItemsResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExportItemsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setExportItemsResponseMessage(array $value)
    {
        $this->exportItemsResponseMessage = $this->castValueIfNeeded("exportItemsResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindItemResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setFindItemResponseMessage(array $value)
    {
        $this->findItemResponseMessage = $this->castValueIfNeeded("findItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setMoveItemResponseMessage(array $value)
    {
        $this->moveItemResponseMessage = $this->castValueIfNeeded("moveItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setCopyItemResponseMessage(array $value)
    {
        $this->copyItemResponseMessage = $this->castValueIfNeeded("copyItemResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResolveNamesResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setResolveNamesResponseMessage(array $value)
    {
        $this->resolveNamesResponseMessage = $this->castValueIfNeeded("resolveNamesResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExpandDLResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setExpandDLResponseMessage(array $value)
    {
        $this->expandDLResponseMessage = $this->castValueIfNeeded("expandDLResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetServerTimeZonesResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetServerTimeZonesResponseMessage(array $value)
    {
        $this->getServerTimeZonesResponseMessage = $this->castValueIfNeeded("getServerTimeZonesResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetEventsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetEventsResponseMessage(array $value)
    {
        $this->getEventsResponseMessage = $this->castValueIfNeeded("getEventsResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetStreamingEventsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetStreamingEventsResponseMessage(array $value)
    {
        $this->getStreamingEventsResponseMessage = $this->castValueIfNeeded("getStreamingEventsResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SubscribeResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setSubscribeResponseMessage(array $value)
    {
        $this->subscribeResponseMessage = $this->castValueIfNeeded("subscribeResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setUnsubscribeResponseMessage(array $value)
    {
        $this->unsubscribeResponseMessage = $this->castValueIfNeeded("unsubscribeResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SendNotificationResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setSendNotificationResponseMessage(array $value)
    {
        $this->sendNotificationResponseMessage = $this->castValueIfNeeded("sendNotificationResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderHierarchyResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setSyncFolderHierarchyResponseMessage(array $value)
    {
        $this->syncFolderHierarchyResponseMessage = $this->castValueIfNeeded("syncFolderHierarchyResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderItemsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setSyncFolderItemsResponseMessage(array $value)
    {
        $this->syncFolderItemsResponseMessage = $this->castValueIfNeeded("syncFolderItemsResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateManagedFolderResponseMessage(array $value)
    {
        $this->createManagedFolderResponseMessage = $this->castValueIfNeeded("createManagedFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ConvertIdResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setConvertIdResponseMessage(array $value)
    {
        $this->convertIdResponseMessage = $this->castValueIfNeeded("convertIdResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetSharingMetadataResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetSharingMetadataResponseMessage(array $value)
    {
        $this->getSharingMetadataResponseMessage = $this->castValueIfNeeded("getSharingMetadataResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RefreshSharingFolderResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setRefreshSharingFolderResponseMessage(array $value)
    {
        $this->refreshSharingFolderResponseMessage = $this->castValueIfNeeded("refreshSharingFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetSharingFolderResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetSharingFolderResponseMessage(array $value)
    {
        $this->getSharingFolderResponseMessage = $this->castValueIfNeeded("getSharingFolderResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateUserConfigurationResponseMessage(array $value)
    {
        $this->createUserConfigurationResponseMessage = $this->castValueIfNeeded("createUserConfigurationResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteUserConfigurationResponseMessage(array $value)
    {
        $this->deleteUserConfigurationResponseMessage = $this->castValueIfNeeded("deleteUserConfigurationResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetUserConfigurationResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetUserConfigurationResponseMessage(array $value)
    {
        $this->getUserConfigurationResponseMessage = $this->castValueIfNeeded("getUserConfigurationResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setUpdateUserConfigurationResponseMessage(array $value)
    {
        $this->updateUserConfigurationResponseMessage = $this->castValueIfNeeded("updateUserConfigurationResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRoomListsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetRoomListsResponse(array $value)
    {
        $this->getRoomListsResponse = $this->castValueIfNeeded("getRoomListsResponse", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRoomsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetRoomsResponse(array $value)
    {
        $this->getRoomsResponse = $this->castValueIfNeeded("getRoomsResponse", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setApplyConversationActionResponseMessage(array $value)
    {
        $this->applyConversationActionResponseMessage = $this->castValueIfNeeded("applyConversationActionResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindMailboxStatisticsByKeywordsResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setFindMailboxStatisticsByKeywordsResponseMessage(array $value)
    {
        $this->findMailboxStatisticsByKeywordsResponseMessage = $this->castValueIfNeeded("findMailboxStatisticsByKeywordsResponseMessage", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetPasswordExpirationDateResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetPasswordExpirationDateResponse(array $value)
    {
        $this->getPasswordExpirationDateResponse = $this->castValueIfNeeded("getPasswordExpirationDateResponse", $value);
        return $this;
    }
}
