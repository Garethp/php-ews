<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing ArrayOfResponseMessagesType
 *
 *
 * XSD Type: ArrayOfResponseMessagesType
 */
class ArrayOfResponseMessagesType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $createItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\DeleteItemResponseMessageType[]
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
     * @var \garethp\ews\API\Message\ApplyConversationActionResponseMessageType[]
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
     * @var \garethp\ews\API\Message\UpdateItemInRecoverableItemsResponseMessageType[]
     */
    protected $updateItemInRecoverableItemsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $createFolderPathResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $markAllItemsAsReadResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetClientAccessTokenResponseMessageType[]
     */
    protected $getClientAccessTokenResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $getAppManifestsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $setClientExtensionResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $getOMEConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $setOMEConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $archiveItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetSpecificUserConfigurationResponseMessageType[]
     */
    protected $getSpecificUserConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetRemindersResponseMessageType[]
     */
    protected $getRemindersResponse = null;

    /**
     * @var \garethp\ews\API\Message\PerformReminderActionResponseMessageType[]
     */
    protected $performReminderActionResponse = null;

    /**
     * @var \garethp\ews\API\Message\GetSearchableMailboxesResponseMessageType[]
     */
    protected $getSearchableMailboxesResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\SearchMailboxesResponseMessageType[]
     */
    protected $searchMailboxesResponseMessage = null;

    /**
     * @var
     * \garethp\ews\API\Message\GetDiscoverySearchConfigurationResponseMessageType[]
     */
    protected $getDiscoverySearchConfigurationResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetHoldOnMailboxesResponseMessageType[]
     */
    protected $getHoldOnMailboxesResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\SetHoldOnMailboxesResponseMessageType[]
     */
    protected $setHoldOnMailboxesResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetNonIndexableItemStatisticsResponseMessageType[]
     */
    protected $getNonIndexableItemStatisticsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetNonIndexableItemDetailsResponseMessageType[]
     */
    protected $getNonIndexableItemDetailsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FindPeopleResponseMessageType[]
     */
    protected $findPeopleResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\FindTagsResponseMessageType[]
     */
    protected $findTagsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\AddTagResponseMessageType[]
     */
    protected $addTagResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\HideTagResponseMessageType[]
     */
    protected $hideTagResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetPersonaResponseMessageType[]
     */
    protected $getPersonaResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetConversationItemsResponseMessageType[]
     */
    protected $getConversationItemsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetUserRetentionPolicyTagsResponseMessageType[]
     */
    protected $getUserRetentionPolicyTagsResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\GetUserPhotoResponseMessageType[]
     */
    protected $getUserPhotoResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\MarkAsJunkResponseMessageType[]
     */
    protected $markAsJunkResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ReportMessageResponseMessageType[]
     */
    protected $reportMessageResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $postModernGroupItemResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $getLastPrivateCatalogUpdateResponseMessage = null;

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType[]
     */
    protected $getPrivateCatalogAddInsResponseMessage = null;

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        if ($this->createItemResponseMessage === null) {
                        $this->createItemResponseMessage = array();
        }

        if (!is_array($this->createItemResponseMessage)) {
            $this->createItemResponseMessage = array($this->createItemResponseMessage);
        }

        $this->createItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemInfoResponseMessageType[]
     */
    public function getCreateItemResponseMessage()
    {
        return $this->createItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]|ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateItemResponseMessage(array|ItemInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->createItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeleteItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteItemResponseMessage(DeleteItemResponseMessageType $value)
    {
        if ($this->deleteItemResponseMessage === null) {
                        $this->deleteItemResponseMessage = array();
        }

        if (!is_array($this->deleteItemResponseMessage)) {
            $this->deleteItemResponseMessage = array($this->deleteItemResponseMessage);
        }

        $this->deleteItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return DeleteItemResponseMessageType[]
     */
    public function getDeleteItemResponseMessage()
    {
        return $this->deleteItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeleteItemResponseMessageType[]|DeleteItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteItemResponseMessage(array|DeleteItemResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->deleteItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        if ($this->getItemResponseMessage === null) {
                        $this->getItemResponseMessage = array();
        }

        if (!is_array($this->getItemResponseMessage)) {
            $this->getItemResponseMessage = array($this->getItemResponseMessage);
        }

        $this->getItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemInfoResponseMessageType[]
     */
    public function getGetItemResponseMessage()
    {
        return $this->getItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]|ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetItemResponseMessage(array|ItemInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UpdateItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUpdateItemResponseMessage(UpdateItemResponseMessageType $value)
    {
        if ($this->updateItemResponseMessage === null) {
                        $this->updateItemResponseMessage = array();
        }

        if (!is_array($this->updateItemResponseMessage)) {
            $this->updateItemResponseMessage = array($this->updateItemResponseMessage);
        }

        $this->updateItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return UpdateItemResponseMessageType[]
     */
    public function getUpdateItemResponseMessage()
    {
        return $this->updateItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UpdateItemResponseMessageType[]|UpdateItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setUpdateItemResponseMessage(array|UpdateItemResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->updateItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UpdateItemInRecoverableItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUpdateItemInRecoverableItemsResponseMessage(UpdateItemInRecoverableItemsResponseMessageType $value)
    {
        if ($this->updateItemInRecoverableItemsResponseMessage === null) {
                        $this->updateItemInRecoverableItemsResponseMessage = array();
        }

        if (!is_array($this->updateItemInRecoverableItemsResponseMessage)) {
            $this->updateItemInRecoverableItemsResponseMessage = array($this->updateItemInRecoverableItemsResponseMessage);
        }

        $this->updateItemInRecoverableItemsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return UpdateItemInRecoverableItemsResponseMessageType[]
     */
    public function getUpdateItemInRecoverableItemsResponseMessage()
    {
        return $this->updateItemInRecoverableItemsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * UpdateItemInRecoverableItemsResponseMessageType[]|UpdateItemInRecoverableItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setUpdateItemInRecoverableItemsResponseMessage(array|UpdateItemInRecoverableItemsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->updateItemInRecoverableItemsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSendItemResponseMessage(ResponseMessageType $value)
    {
        if ($this->sendItemResponseMessage === null) {
                        $this->sendItemResponseMessage = array();
        }

        if (!is_array($this->sendItemResponseMessage)) {
            $this->sendItemResponseMessage = array($this->sendItemResponseMessage);
        }

        $this->sendItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getSendItemResponseMessage()
    {
        return $this->sendItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSendItemResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->sendItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteFolderResponseMessage(ResponseMessageType $value)
    {
        if ($this->deleteFolderResponseMessage === null) {
                        $this->deleteFolderResponseMessage = array();
        }

        if (!is_array($this->deleteFolderResponseMessage)) {
            $this->deleteFolderResponseMessage = array($this->deleteFolderResponseMessage);
        }

        $this->deleteFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getDeleteFolderResponseMessage()
    {
        return $this->deleteFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteFolderResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->deleteFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addEmptyFolderResponseMessage(ResponseMessageType $value)
    {
        if ($this->emptyFolderResponseMessage === null) {
                        $this->emptyFolderResponseMessage = array();
        }

        if (!is_array($this->emptyFolderResponseMessage)) {
            $this->emptyFolderResponseMessage = array($this->emptyFolderResponseMessage);
        }

        $this->emptyFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getEmptyFolderResponseMessage()
    {
        return $this->emptyFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setEmptyFolderResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->emptyFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        if ($this->createFolderResponseMessage === null) {
                        $this->createFolderResponseMessage = array();
        }

        if (!is_array($this->createFolderResponseMessage)) {
            $this->createFolderResponseMessage = array($this->createFolderResponseMessage);
        }

        $this->createFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderInfoResponseMessageType[]
     */
    public function getCreateFolderResponseMessage()
    {
        return $this->createFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]|FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateFolderResponseMessage(array|FolderInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->createFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        if ($this->getFolderResponseMessage === null) {
                        $this->getFolderResponseMessage = array();
        }

        if (!is_array($this->getFolderResponseMessage)) {
            $this->getFolderResponseMessage = array($this->getFolderResponseMessage);
        }

        $this->getFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderInfoResponseMessageType[]
     */
    public function getGetFolderResponseMessage()
    {
        return $this->getFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]|FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetFolderResponseMessage(array|FolderInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindFolderResponseMessage(FindFolderResponseMessageType $value)
    {
        if ($this->findFolderResponseMessage === null) {
                        $this->findFolderResponseMessage = array();
        }

        if (!is_array($this->findFolderResponseMessage)) {
            $this->findFolderResponseMessage = array($this->findFolderResponseMessage);
        }

        $this->findFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FindFolderResponseMessageType[]
     */
    public function getFindFolderResponseMessage()
    {
        return $this->findFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindFolderResponseMessageType[]|FindFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setFindFolderResponseMessage(array|FindFolderResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->findFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUpdateFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        if ($this->updateFolderResponseMessage === null) {
                        $this->updateFolderResponseMessage = array();
        }

        if (!is_array($this->updateFolderResponseMessage)) {
            $this->updateFolderResponseMessage = array($this->updateFolderResponseMessage);
        }

        $this->updateFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderInfoResponseMessageType[]
     */
    public function getUpdateFolderResponseMessage()
    {
        return $this->updateFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]|FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setUpdateFolderResponseMessage(array|FolderInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->updateFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addMoveFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        if ($this->moveFolderResponseMessage === null) {
                        $this->moveFolderResponseMessage = array();
        }

        if (!is_array($this->moveFolderResponseMessage)) {
            $this->moveFolderResponseMessage = array($this->moveFolderResponseMessage);
        }

        $this->moveFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderInfoResponseMessageType[]
     */
    public function getMoveFolderResponseMessage()
    {
        return $this->moveFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]|FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setMoveFolderResponseMessage(array|FolderInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->moveFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCopyFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        if ($this->copyFolderResponseMessage === null) {
                        $this->copyFolderResponseMessage = array();
        }

        if (!is_array($this->copyFolderResponseMessage)) {
            $this->copyFolderResponseMessage = array($this->copyFolderResponseMessage);
        }

        $this->copyFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderInfoResponseMessageType[]
     */
    public function getCopyFolderResponseMessage()
    {
        return $this->copyFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]|FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCopyFolderResponseMessage(array|FolderInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->copyFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateFolderPathResponseMessage(FolderInfoResponseMessageType $value)
    {
        if ($this->createFolderPathResponseMessage === null) {
                        $this->createFolderPathResponseMessage = array();
        }

        if (!is_array($this->createFolderPathResponseMessage)) {
            $this->createFolderPathResponseMessage = array($this->createFolderPathResponseMessage);
        }

        $this->createFolderPathResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderInfoResponseMessageType[]
     */
    public function getCreateFolderPathResponseMessage()
    {
        return $this->createFolderPathResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]|FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateFolderPathResponseMessage(array|FolderInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->createFolderPathResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AttachmentInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateAttachmentResponseMessage(AttachmentInfoResponseMessageType $value)
    {
        if ($this->createAttachmentResponseMessage === null) {
                        $this->createAttachmentResponseMessage = array();
        }

        if (!is_array($this->createAttachmentResponseMessage)) {
            $this->createAttachmentResponseMessage = array($this->createAttachmentResponseMessage);
        }

        $this->createAttachmentResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AttachmentInfoResponseMessageType[]
     */
    public function getCreateAttachmentResponseMessage()
    {
        return $this->createAttachmentResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * AttachmentInfoResponseMessageType[]|AttachmentInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateAttachmentResponseMessage(array|AttachmentInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->createAttachmentResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value DeleteAttachmentResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteAttachmentResponseMessage(DeleteAttachmentResponseMessageType $value)
    {
        if ($this->deleteAttachmentResponseMessage === null) {
                        $this->deleteAttachmentResponseMessage = array();
        }

        if (!is_array($this->deleteAttachmentResponseMessage)) {
            $this->deleteAttachmentResponseMessage = array($this->deleteAttachmentResponseMessage);
        }

        $this->deleteAttachmentResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return DeleteAttachmentResponseMessageType[]
     */
    public function getDeleteAttachmentResponseMessage()
    {
        return $this->deleteAttachmentResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * DeleteAttachmentResponseMessageType[]|DeleteAttachmentResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteAttachmentResponseMessage(array|DeleteAttachmentResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->deleteAttachmentResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AttachmentInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetAttachmentResponseMessage(AttachmentInfoResponseMessageType $value)
    {
        if ($this->getAttachmentResponseMessage === null) {
                        $this->getAttachmentResponseMessage = array();
        }

        if (!is_array($this->getAttachmentResponseMessage)) {
            $this->getAttachmentResponseMessage = array($this->getAttachmentResponseMessage);
        }

        $this->getAttachmentResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AttachmentInfoResponseMessageType[]
     */
    public function getGetAttachmentResponseMessage()
    {
        return $this->getAttachmentResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * AttachmentInfoResponseMessageType[]|AttachmentInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetAttachmentResponseMessage(array|AttachmentInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getAttachmentResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UploadItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUploadItemsResponseMessage(UploadItemsResponseMessageType $value)
    {
        if ($this->uploadItemsResponseMessage === null) {
                        $this->uploadItemsResponseMessage = array();
        }

        if (!is_array($this->uploadItemsResponseMessage)) {
            $this->uploadItemsResponseMessage = array($this->uploadItemsResponseMessage);
        }

        $this->uploadItemsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return UploadItemsResponseMessageType[]
     */
    public function getUploadItemsResponseMessage()
    {
        return $this->uploadItemsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value UploadItemsResponseMessageType[]|UploadItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setUploadItemsResponseMessage(array|UploadItemsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->uploadItemsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExportItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addExportItemsResponseMessage(ExportItemsResponseMessageType $value)
    {
        if ($this->exportItemsResponseMessage === null) {
                        $this->exportItemsResponseMessage = array();
        }

        if (!is_array($this->exportItemsResponseMessage)) {
            $this->exportItemsResponseMessage = array($this->exportItemsResponseMessage);
        }

        $this->exportItemsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ExportItemsResponseMessageType[]
     */
    public function getExportItemsResponseMessage()
    {
        return $this->exportItemsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExportItemsResponseMessageType[]|ExportItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setExportItemsResponseMessage(array|ExportItemsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->exportItemsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addMarkAllItemsAsReadResponseMessage(ResponseMessageType $value)
    {
        if ($this->markAllItemsAsReadResponseMessage === null) {
                        $this->markAllItemsAsReadResponseMessage = array();
        }

        if (!is_array($this->markAllItemsAsReadResponseMessage)) {
            $this->markAllItemsAsReadResponseMessage = array($this->markAllItemsAsReadResponseMessage);
        }

        $this->markAllItemsAsReadResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getMarkAllItemsAsReadResponseMessage()
    {
        return $this->markAllItemsAsReadResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setMarkAllItemsAsReadResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->markAllItemsAsReadResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetClientAccessTokenResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetClientAccessTokenResponseMessage(GetClientAccessTokenResponseMessageType $value)
    {
        if ($this->getClientAccessTokenResponseMessage === null) {
                        $this->getClientAccessTokenResponseMessage = array();
        }

        if (!is_array($this->getClientAccessTokenResponseMessage)) {
            $this->getClientAccessTokenResponseMessage = array($this->getClientAccessTokenResponseMessage);
        }

        $this->getClientAccessTokenResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetClientAccessTokenResponseMessageType[]
     */
    public function getGetClientAccessTokenResponseMessage()
    {
        return $this->getClientAccessTokenResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetClientAccessTokenResponseMessageType[]|GetClientAccessTokenResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetClientAccessTokenResponseMessage(array|GetClientAccessTokenResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getClientAccessTokenResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetAppManifestsResponseMessage(ResponseMessageType $value)
    {
        if ($this->getAppManifestsResponseMessage === null) {
                        $this->getAppManifestsResponseMessage = array();
        }

        if (!is_array($this->getAppManifestsResponseMessage)) {
            $this->getAppManifestsResponseMessage = array($this->getAppManifestsResponseMessage);
        }

        $this->getAppManifestsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getGetAppManifestsResponseMessage()
    {
        return $this->getAppManifestsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetAppManifestsResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getAppManifestsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSetClientExtensionResponseMessage(ResponseMessageType $value)
    {
        if ($this->setClientExtensionResponseMessage === null) {
                        $this->setClientExtensionResponseMessage = array();
        }

        if (!is_array($this->setClientExtensionResponseMessage)) {
            $this->setClientExtensionResponseMessage = array($this->setClientExtensionResponseMessage);
        }

        $this->setClientExtensionResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getSetClientExtensionResponseMessage()
    {
        return $this->setClientExtensionResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSetClientExtensionResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->setClientExtensionResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetOMEConfigurationResponseMessage(ResponseMessageType $value)
    {
        if ($this->getOMEConfigurationResponseMessage === null) {
                        $this->getOMEConfigurationResponseMessage = array();
        }

        if (!is_array($this->getOMEConfigurationResponseMessage)) {
            $this->getOMEConfigurationResponseMessage = array($this->getOMEConfigurationResponseMessage);
        }

        $this->getOMEConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getGetOMEConfigurationResponseMessage()
    {
        return $this->getOMEConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetOMEConfigurationResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getOMEConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSetOMEConfigurationResponseMessage(ResponseMessageType $value)
    {
        if ($this->setOMEConfigurationResponseMessage === null) {
                        $this->setOMEConfigurationResponseMessage = array();
        }

        if (!is_array($this->setOMEConfigurationResponseMessage)) {
            $this->setOMEConfigurationResponseMessage = array($this->setOMEConfigurationResponseMessage);
        }

        $this->setOMEConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getSetOMEConfigurationResponseMessage()
    {
        return $this->setOMEConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSetOMEConfigurationResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->setOMEConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindItemResponseMessage(FindItemResponseMessageType $value)
    {
        if ($this->findItemResponseMessage === null) {
                        $this->findItemResponseMessage = array();
        }

        if (!is_array($this->findItemResponseMessage)) {
            $this->findItemResponseMessage = array($this->findItemResponseMessage);
        }

        $this->findItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FindItemResponseMessageType[]
     */
    public function getFindItemResponseMessage()
    {
        return $this->findItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindItemResponseMessageType[]|FindItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setFindItemResponseMessage(array|FindItemResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->findItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addMoveItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        if ($this->moveItemResponseMessage === null) {
                        $this->moveItemResponseMessage = array();
        }

        if (!is_array($this->moveItemResponseMessage)) {
            $this->moveItemResponseMessage = array($this->moveItemResponseMessage);
        }

        $this->moveItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemInfoResponseMessageType[]
     */
    public function getMoveItemResponseMessage()
    {
        return $this->moveItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]|ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setMoveItemResponseMessage(array|ItemInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->moveItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addArchiveItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        if ($this->archiveItemResponseMessage === null) {
                        $this->archiveItemResponseMessage = array();
        }

        if (!is_array($this->archiveItemResponseMessage)) {
            $this->archiveItemResponseMessage = array($this->archiveItemResponseMessage);
        }

        $this->archiveItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemInfoResponseMessageType[]
     */
    public function getArchiveItemResponseMessage()
    {
        return $this->archiveItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]|ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setArchiveItemResponseMessage(array|ItemInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->archiveItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCopyItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        if ($this->copyItemResponseMessage === null) {
                        $this->copyItemResponseMessage = array();
        }

        if (!is_array($this->copyItemResponseMessage)) {
            $this->copyItemResponseMessage = array($this->copyItemResponseMessage);
        }

        $this->copyItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemInfoResponseMessageType[]
     */
    public function getCopyItemResponseMessage()
    {
        return $this->copyItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]|ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCopyItemResponseMessage(array|ItemInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->copyItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResolveNamesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addResolveNamesResponseMessage(ResolveNamesResponseMessageType $value)
    {
        if ($this->resolveNamesResponseMessage === null) {
                        $this->resolveNamesResponseMessage = array();
        }

        if (!is_array($this->resolveNamesResponseMessage)) {
            $this->resolveNamesResponseMessage = array($this->resolveNamesResponseMessage);
        }

        $this->resolveNamesResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResolveNamesResponseMessageType[]
     */
    public function getResolveNamesResponseMessage()
    {
        return $this->resolveNamesResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResolveNamesResponseMessageType[]|ResolveNamesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setResolveNamesResponseMessage(array|ResolveNamesResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->resolveNamesResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExpandDLResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addExpandDLResponseMessage(ExpandDLResponseMessageType $value)
    {
        if ($this->expandDLResponseMessage === null) {
                        $this->expandDLResponseMessage = array();
        }

        if (!is_array($this->expandDLResponseMessage)) {
            $this->expandDLResponseMessage = array($this->expandDLResponseMessage);
        }

        $this->expandDLResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ExpandDLResponseMessageType[]
     */
    public function getExpandDLResponseMessage()
    {
        return $this->expandDLResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ExpandDLResponseMessageType[]|ExpandDLResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setExpandDLResponseMessage(array|ExpandDLResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->expandDLResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetServerTimeZonesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetServerTimeZonesResponseMessage(GetServerTimeZonesResponseMessageType $value)
    {
        if ($this->getServerTimeZonesResponseMessage === null) {
                        $this->getServerTimeZonesResponseMessage = array();
        }

        if (!is_array($this->getServerTimeZonesResponseMessage)) {
            $this->getServerTimeZonesResponseMessage = array($this->getServerTimeZonesResponseMessage);
        }

        $this->getServerTimeZonesResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetServerTimeZonesResponseMessageType[]
     */
    public function getGetServerTimeZonesResponseMessage()
    {
        return $this->getServerTimeZonesResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetServerTimeZonesResponseMessageType[]|GetServerTimeZonesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetServerTimeZonesResponseMessage(array|GetServerTimeZonesResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getServerTimeZonesResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetEventsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetEventsResponseMessage(GetEventsResponseMessageType $value)
    {
        if ($this->getEventsResponseMessage === null) {
                        $this->getEventsResponseMessage = array();
        }

        if (!is_array($this->getEventsResponseMessage)) {
            $this->getEventsResponseMessage = array($this->getEventsResponseMessage);
        }

        $this->getEventsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetEventsResponseMessageType[]
     */
    public function getGetEventsResponseMessage()
    {
        return $this->getEventsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetEventsResponseMessageType[]|GetEventsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetEventsResponseMessage(array|GetEventsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getEventsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetStreamingEventsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetStreamingEventsResponseMessage(GetStreamingEventsResponseMessageType $value)
    {
        if ($this->getStreamingEventsResponseMessage === null) {
                        $this->getStreamingEventsResponseMessage = array();
        }

        if (!is_array($this->getStreamingEventsResponseMessage)) {
            $this->getStreamingEventsResponseMessage = array($this->getStreamingEventsResponseMessage);
        }

        $this->getStreamingEventsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetStreamingEventsResponseMessageType[]
     */
    public function getGetStreamingEventsResponseMessage()
    {
        return $this->getStreamingEventsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetStreamingEventsResponseMessageType[]|GetStreamingEventsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetStreamingEventsResponseMessage(array|GetStreamingEventsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getStreamingEventsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SubscribeResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSubscribeResponseMessage(SubscribeResponseMessageType $value)
    {
        if ($this->subscribeResponseMessage === null) {
                        $this->subscribeResponseMessage = array();
        }

        if (!is_array($this->subscribeResponseMessage)) {
            $this->subscribeResponseMessage = array($this->subscribeResponseMessage);
        }

        $this->subscribeResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SubscribeResponseMessageType[]
     */
    public function getSubscribeResponseMessage()
    {
        return $this->subscribeResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SubscribeResponseMessageType[]|SubscribeResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSubscribeResponseMessage(array|SubscribeResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->subscribeResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUnsubscribeResponseMessage(ResponseMessageType $value)
    {
        if ($this->unsubscribeResponseMessage === null) {
                        $this->unsubscribeResponseMessage = array();
        }

        if (!is_array($this->unsubscribeResponseMessage)) {
            $this->unsubscribeResponseMessage = array($this->unsubscribeResponseMessage);
        }

        $this->unsubscribeResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getUnsubscribeResponseMessage()
    {
        return $this->unsubscribeResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setUnsubscribeResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->unsubscribeResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SendNotificationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSendNotificationResponseMessage(SendNotificationResponseMessageType $value)
    {
        if ($this->sendNotificationResponseMessage === null) {
                        $this->sendNotificationResponseMessage = array();
        }

        if (!is_array($this->sendNotificationResponseMessage)) {
            $this->sendNotificationResponseMessage = array($this->sendNotificationResponseMessage);
        }

        $this->sendNotificationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SendNotificationResponseMessageType[]
     */
    public function getSendNotificationResponseMessage()
    {
        return $this->sendNotificationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * SendNotificationResponseMessageType[]|SendNotificationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSendNotificationResponseMessage(array|SendNotificationResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->sendNotificationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderHierarchyResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSyncFolderHierarchyResponseMessage(SyncFolderHierarchyResponseMessageType $value)
    {
        if ($this->syncFolderHierarchyResponseMessage === null) {
                        $this->syncFolderHierarchyResponseMessage = array();
        }

        if (!is_array($this->syncFolderHierarchyResponseMessage)) {
            $this->syncFolderHierarchyResponseMessage = array($this->syncFolderHierarchyResponseMessage);
        }

        $this->syncFolderHierarchyResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SyncFolderHierarchyResponseMessageType[]
     */
    public function getSyncFolderHierarchyResponseMessage()
    {
        return $this->syncFolderHierarchyResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * SyncFolderHierarchyResponseMessageType[]|SyncFolderHierarchyResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSyncFolderHierarchyResponseMessage(array|SyncFolderHierarchyResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->syncFolderHierarchyResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SyncFolderItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSyncFolderItemsResponseMessage(SyncFolderItemsResponseMessageType $value)
    {
        if ($this->syncFolderItemsResponseMessage === null) {
                        $this->syncFolderItemsResponseMessage = array();
        }

        if (!is_array($this->syncFolderItemsResponseMessage)) {
            $this->syncFolderItemsResponseMessage = array($this->syncFolderItemsResponseMessage);
        }

        $this->syncFolderItemsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SyncFolderItemsResponseMessageType[]
     */
    public function getSyncFolderItemsResponseMessage()
    {
        return $this->syncFolderItemsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * SyncFolderItemsResponseMessageType[]|SyncFolderItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSyncFolderItemsResponseMessage(array|SyncFolderItemsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->syncFolderItemsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateManagedFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        if ($this->createManagedFolderResponseMessage === null) {
                        $this->createManagedFolderResponseMessage = array();
        }

        if (!is_array($this->createManagedFolderResponseMessage)) {
            $this->createManagedFolderResponseMessage = array($this->createManagedFolderResponseMessage);
        }

        $this->createManagedFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FolderInfoResponseMessageType[]
     */
    public function getCreateManagedFolderResponseMessage()
    {
        return $this->createManagedFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderInfoResponseMessageType[]|FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateManagedFolderResponseMessage(array|FolderInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->createManagedFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ConvertIdResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addConvertIdResponseMessage(ConvertIdResponseMessageType $value)
    {
        if ($this->convertIdResponseMessage === null) {
                        $this->convertIdResponseMessage = array();
        }

        if (!is_array($this->convertIdResponseMessage)) {
            $this->convertIdResponseMessage = array($this->convertIdResponseMessage);
        }

        $this->convertIdResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ConvertIdResponseMessageType[]
     */
    public function getConvertIdResponseMessage()
    {
        return $this->convertIdResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ConvertIdResponseMessageType[]|ConvertIdResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setConvertIdResponseMessage(array|ConvertIdResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->convertIdResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetSharingMetadataResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetSharingMetadataResponseMessage(GetSharingMetadataResponseMessageType $value)
    {
        if ($this->getSharingMetadataResponseMessage === null) {
                        $this->getSharingMetadataResponseMessage = array();
        }

        if (!is_array($this->getSharingMetadataResponseMessage)) {
            $this->getSharingMetadataResponseMessage = array($this->getSharingMetadataResponseMessage);
        }

        $this->getSharingMetadataResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetSharingMetadataResponseMessageType[]
     */
    public function getGetSharingMetadataResponseMessage()
    {
        return $this->getSharingMetadataResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetSharingMetadataResponseMessageType[]|GetSharingMetadataResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetSharingMetadataResponseMessage(array|GetSharingMetadataResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getSharingMetadataResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value RefreshSharingFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addRefreshSharingFolderResponseMessage(RefreshSharingFolderResponseMessageType $value)
    {
        if ($this->refreshSharingFolderResponseMessage === null) {
                        $this->refreshSharingFolderResponseMessage = array();
        }

        if (!is_array($this->refreshSharingFolderResponseMessage)) {
            $this->refreshSharingFolderResponseMessage = array($this->refreshSharingFolderResponseMessage);
        }

        $this->refreshSharingFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return RefreshSharingFolderResponseMessageType[]
     */
    public function getRefreshSharingFolderResponseMessage()
    {
        return $this->refreshSharingFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * RefreshSharingFolderResponseMessageType[]|RefreshSharingFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setRefreshSharingFolderResponseMessage(array|RefreshSharingFolderResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->refreshSharingFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetSharingFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetSharingFolderResponseMessage(GetSharingFolderResponseMessageType $value)
    {
        if ($this->getSharingFolderResponseMessage === null) {
                        $this->getSharingFolderResponseMessage = array();
        }

        if (!is_array($this->getSharingFolderResponseMessage)) {
            $this->getSharingFolderResponseMessage = array($this->getSharingFolderResponseMessage);
        }

        $this->getSharingFolderResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetSharingFolderResponseMessageType[]
     */
    public function getGetSharingFolderResponseMessage()
    {
        return $this->getSharingFolderResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetSharingFolderResponseMessageType[]|GetSharingFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetSharingFolderResponseMessage(array|GetSharingFolderResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getSharingFolderResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateUserConfigurationResponseMessage(ResponseMessageType $value)
    {
        if ($this->createUserConfigurationResponseMessage === null) {
                        $this->createUserConfigurationResponseMessage = array();
        }

        if (!is_array($this->createUserConfigurationResponseMessage)) {
            $this->createUserConfigurationResponseMessage = array($this->createUserConfigurationResponseMessage);
        }

        $this->createUserConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getCreateUserConfigurationResponseMessage()
    {
        return $this->createUserConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setCreateUserConfigurationResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->createUserConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteUserConfigurationResponseMessage(ResponseMessageType $value)
    {
        if ($this->deleteUserConfigurationResponseMessage === null) {
                        $this->deleteUserConfigurationResponseMessage = array();
        }

        if (!is_array($this->deleteUserConfigurationResponseMessage)) {
            $this->deleteUserConfigurationResponseMessage = array($this->deleteUserConfigurationResponseMessage);
        }

        $this->deleteUserConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getDeleteUserConfigurationResponseMessage()
    {
        return $this->deleteUserConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setDeleteUserConfigurationResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->deleteUserConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetUserConfigurationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetUserConfigurationResponseMessage(GetUserConfigurationResponseMessageType $value)
    {
        if ($this->getUserConfigurationResponseMessage === null) {
                        $this->getUserConfigurationResponseMessage = array();
        }

        if (!is_array($this->getUserConfigurationResponseMessage)) {
            $this->getUserConfigurationResponseMessage = array($this->getUserConfigurationResponseMessage);
        }

        $this->getUserConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetUserConfigurationResponseMessageType[]
     */
    public function getGetUserConfigurationResponseMessage()
    {
        return $this->getUserConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetUserConfigurationResponseMessageType[]|GetUserConfigurationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetUserConfigurationResponseMessage(array|GetUserConfigurationResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getUserConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetSpecificUserConfigurationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetSpecificUserConfigurationResponseMessage(GetSpecificUserConfigurationResponseMessageType $value)
    {
        if ($this->getSpecificUserConfigurationResponseMessage === null) {
                        $this->getSpecificUserConfigurationResponseMessage = array();
        }

        if (!is_array($this->getSpecificUserConfigurationResponseMessage)) {
            $this->getSpecificUserConfigurationResponseMessage = array($this->getSpecificUserConfigurationResponseMessage);
        }

        $this->getSpecificUserConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetSpecificUserConfigurationResponseMessageType[]
     */
    public function getGetSpecificUserConfigurationResponseMessage()
    {
        return $this->getSpecificUserConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetSpecificUserConfigurationResponseMessageType[]|GetSpecificUserConfigurationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetSpecificUserConfigurationResponseMessage(array|GetSpecificUserConfigurationResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getSpecificUserConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUpdateUserConfigurationResponseMessage(ResponseMessageType $value)
    {
        if ($this->updateUserConfigurationResponseMessage === null) {
                        $this->updateUserConfigurationResponseMessage = array();
        }

        if (!is_array($this->updateUserConfigurationResponseMessage)) {
            $this->updateUserConfigurationResponseMessage = array($this->updateUserConfigurationResponseMessage);
        }

        $this->updateUserConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getUpdateUserConfigurationResponseMessage()
    {
        return $this->updateUserConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setUpdateUserConfigurationResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->updateUserConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRoomListsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetRoomListsResponse(GetRoomListsResponseMessageType $value)
    {
        if ($this->getRoomListsResponse === null) {
                        $this->getRoomListsResponse = array();
        }

        if (!is_array($this->getRoomListsResponse)) {
            $this->getRoomListsResponse = array($this->getRoomListsResponse);
        }

        $this->getRoomListsResponse[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetRoomListsResponseMessageType[]
     */
    public function getGetRoomListsResponse()
    {
        return $this->getRoomListsResponse;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRoomListsResponseMessageType[]|GetRoomListsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetRoomListsResponse(array|GetRoomListsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getRoomListsResponse = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRoomsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetRoomsResponse(GetRoomsResponseMessageType $value)
    {
        if ($this->getRoomsResponse === null) {
                        $this->getRoomsResponse = array();
        }

        if (!is_array($this->getRoomsResponse)) {
            $this->getRoomsResponse = array($this->getRoomsResponse);
        }

        $this->getRoomsResponse[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetRoomsResponseMessageType[]
     */
    public function getGetRoomsResponse()
    {
        return $this->getRoomsResponse;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRoomsResponseMessageType[]|GetRoomsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetRoomsResponse(array|GetRoomsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getRoomsResponse = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRemindersResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetRemindersResponse(GetRemindersResponseMessageType $value)
    {
        if ($this->getRemindersResponse === null) {
                        $this->getRemindersResponse = array();
        }

        if (!is_array($this->getRemindersResponse)) {
            $this->getRemindersResponse = array($this->getRemindersResponse);
        }

        $this->getRemindersResponse[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetRemindersResponseMessageType[]
     */
    public function getGetRemindersResponse()
    {
        return $this->getRemindersResponse;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetRemindersResponseMessageType[]|GetRemindersResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetRemindersResponse(array|GetRemindersResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getRemindersResponse = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value PerformReminderActionResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addPerformReminderActionResponse(PerformReminderActionResponseMessageType $value)
    {
        if ($this->performReminderActionResponse === null) {
                        $this->performReminderActionResponse = array();
        }

        if (!is_array($this->performReminderActionResponse)) {
            $this->performReminderActionResponse = array($this->performReminderActionResponse);
        }

        $this->performReminderActionResponse[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return PerformReminderActionResponseMessageType[]
     */
    public function getPerformReminderActionResponse()
    {
        return $this->performReminderActionResponse;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * PerformReminderActionResponseMessageType[]|PerformReminderActionResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setPerformReminderActionResponse(array|PerformReminderActionResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->performReminderActionResponse = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ApplyConversationActionResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addApplyConversationActionResponseMessage(ApplyConversationActionResponseMessageType $value)
    {
        if ($this->applyConversationActionResponseMessage === null) {
                        $this->applyConversationActionResponseMessage = array();
        }

        if (!is_array($this->applyConversationActionResponseMessage)) {
            $this->applyConversationActionResponseMessage = array($this->applyConversationActionResponseMessage);
        }

        $this->applyConversationActionResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ApplyConversationActionResponseMessageType[]
     */
    public function getApplyConversationActionResponseMessage()
    {
        return $this->applyConversationActionResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * ApplyConversationActionResponseMessageType[]|ApplyConversationActionResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setApplyConversationActionResponseMessage(array|ApplyConversationActionResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->applyConversationActionResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindMailboxStatisticsByKeywordsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindMailboxStatisticsByKeywordsResponseMessage(FindMailboxStatisticsByKeywordsResponseMessageType $value)
    {
        if ($this->findMailboxStatisticsByKeywordsResponseMessage === null) {
                        $this->findMailboxStatisticsByKeywordsResponseMessage = array();
        }

        if (!is_array($this->findMailboxStatisticsByKeywordsResponseMessage)) {
            $this->findMailboxStatisticsByKeywordsResponseMessage = array($this->findMailboxStatisticsByKeywordsResponseMessage);
        }

        $this->findMailboxStatisticsByKeywordsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FindMailboxStatisticsByKeywordsResponseMessageType[]
     */
    public function getFindMailboxStatisticsByKeywordsResponseMessage()
    {
        return $this->findMailboxStatisticsByKeywordsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * FindMailboxStatisticsByKeywordsResponseMessageType[]|FindMailboxStatisticsByKeywordsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setFindMailboxStatisticsByKeywordsResponseMessage(array|FindMailboxStatisticsByKeywordsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->findMailboxStatisticsByKeywordsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetSearchableMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetSearchableMailboxesResponseMessage(GetSearchableMailboxesResponseMessageType $value)
    {
        if ($this->getSearchableMailboxesResponseMessage === null) {
                        $this->getSearchableMailboxesResponseMessage = array();
        }

        if (!is_array($this->getSearchableMailboxesResponseMessage)) {
            $this->getSearchableMailboxesResponseMessage = array($this->getSearchableMailboxesResponseMessage);
        }

        $this->getSearchableMailboxesResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetSearchableMailboxesResponseMessageType[]
     */
    public function getGetSearchableMailboxesResponseMessage()
    {
        return $this->getSearchableMailboxesResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetSearchableMailboxesResponseMessageType[]|GetSearchableMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetSearchableMailboxesResponseMessage(array|GetSearchableMailboxesResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getSearchableMailboxesResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SearchMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSearchMailboxesResponseMessage(SearchMailboxesResponseMessageType $value)
    {
        if ($this->searchMailboxesResponseMessage === null) {
                        $this->searchMailboxesResponseMessage = array();
        }

        if (!is_array($this->searchMailboxesResponseMessage)) {
            $this->searchMailboxesResponseMessage = array($this->searchMailboxesResponseMessage);
        }

        $this->searchMailboxesResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SearchMailboxesResponseMessageType[]
     */
    public function getSearchMailboxesResponseMessage()
    {
        return $this->searchMailboxesResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * SearchMailboxesResponseMessageType[]|SearchMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSearchMailboxesResponseMessage(array|SearchMailboxesResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->searchMailboxesResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetDiscoverySearchConfigurationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetDiscoverySearchConfigurationResponseMessage(GetDiscoverySearchConfigurationResponseMessageType $value)
    {
        if ($this->getDiscoverySearchConfigurationResponseMessage === null) {
                        $this->getDiscoverySearchConfigurationResponseMessage = array();
        }

        if (!is_array($this->getDiscoverySearchConfigurationResponseMessage)) {
            $this->getDiscoverySearchConfigurationResponseMessage = array($this->getDiscoverySearchConfigurationResponseMessage);
        }

        $this->getDiscoverySearchConfigurationResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetDiscoverySearchConfigurationResponseMessageType[]
     */
    public function getGetDiscoverySearchConfigurationResponseMessage()
    {
        return $this->getDiscoverySearchConfigurationResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetDiscoverySearchConfigurationResponseMessageType[]|GetDiscoverySearchConfigurationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetDiscoverySearchConfigurationResponseMessage(array|GetDiscoverySearchConfigurationResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getDiscoverySearchConfigurationResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetHoldOnMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetHoldOnMailboxesResponseMessage(GetHoldOnMailboxesResponseMessageType $value)
    {
        if ($this->getHoldOnMailboxesResponseMessage === null) {
                        $this->getHoldOnMailboxesResponseMessage = array();
        }

        if (!is_array($this->getHoldOnMailboxesResponseMessage)) {
            $this->getHoldOnMailboxesResponseMessage = array($this->getHoldOnMailboxesResponseMessage);
        }

        $this->getHoldOnMailboxesResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetHoldOnMailboxesResponseMessageType[]
     */
    public function getGetHoldOnMailboxesResponseMessage()
    {
        return $this->getHoldOnMailboxesResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetHoldOnMailboxesResponseMessageType[]|GetHoldOnMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetHoldOnMailboxesResponseMessage(array|GetHoldOnMailboxesResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getHoldOnMailboxesResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SetHoldOnMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSetHoldOnMailboxesResponseMessage(SetHoldOnMailboxesResponseMessageType $value)
    {
        if ($this->setHoldOnMailboxesResponseMessage === null) {
                        $this->setHoldOnMailboxesResponseMessage = array();
        }

        if (!is_array($this->setHoldOnMailboxesResponseMessage)) {
            $this->setHoldOnMailboxesResponseMessage = array($this->setHoldOnMailboxesResponseMessage);
        }

        $this->setHoldOnMailboxesResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SetHoldOnMailboxesResponseMessageType[]
     */
    public function getSetHoldOnMailboxesResponseMessage()
    {
        return $this->setHoldOnMailboxesResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * SetHoldOnMailboxesResponseMessageType[]|SetHoldOnMailboxesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setSetHoldOnMailboxesResponseMessage(array|SetHoldOnMailboxesResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->setHoldOnMailboxesResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetNonIndexableItemStatisticsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetNonIndexableItemStatisticsResponseMessage(GetNonIndexableItemStatisticsResponseMessageType $value)
    {
        if ($this->getNonIndexableItemStatisticsResponseMessage === null) {
                        $this->getNonIndexableItemStatisticsResponseMessage = array();
        }

        if (!is_array($this->getNonIndexableItemStatisticsResponseMessage)) {
            $this->getNonIndexableItemStatisticsResponseMessage = array($this->getNonIndexableItemStatisticsResponseMessage);
        }

        $this->getNonIndexableItemStatisticsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetNonIndexableItemStatisticsResponseMessageType[]
     */
    public function getGetNonIndexableItemStatisticsResponseMessage()
    {
        return $this->getNonIndexableItemStatisticsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetNonIndexableItemStatisticsResponseMessageType[]|GetNonIndexableItemStatisticsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetNonIndexableItemStatisticsResponseMessage(array|GetNonIndexableItemStatisticsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getNonIndexableItemStatisticsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetNonIndexableItemDetailsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetNonIndexableItemDetailsResponseMessage(GetNonIndexableItemDetailsResponseMessageType $value)
    {
        if ($this->getNonIndexableItemDetailsResponseMessage === null) {
                        $this->getNonIndexableItemDetailsResponseMessage = array();
        }

        if (!is_array($this->getNonIndexableItemDetailsResponseMessage)) {
            $this->getNonIndexableItemDetailsResponseMessage = array($this->getNonIndexableItemDetailsResponseMessage);
        }

        $this->getNonIndexableItemDetailsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetNonIndexableItemDetailsResponseMessageType[]
     */
    public function getGetNonIndexableItemDetailsResponseMessage()
    {
        return $this->getNonIndexableItemDetailsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetNonIndexableItemDetailsResponseMessageType[]|GetNonIndexableItemDetailsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetNonIndexableItemDetailsResponseMessage(array|GetNonIndexableItemDetailsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getNonIndexableItemDetailsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindPeopleResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindPeopleResponseMessage(FindPeopleResponseMessageType $value)
    {
        if ($this->findPeopleResponseMessage === null) {
                        $this->findPeopleResponseMessage = array();
        }

        if (!is_array($this->findPeopleResponseMessage)) {
            $this->findPeopleResponseMessage = array($this->findPeopleResponseMessage);
        }

        $this->findPeopleResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FindPeopleResponseMessageType[]
     */
    public function getFindPeopleResponseMessage()
    {
        return $this->findPeopleResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindPeopleResponseMessageType[]|FindPeopleResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setFindPeopleResponseMessage(array|FindPeopleResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->findPeopleResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindTagsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindTagsResponseMessage(FindTagsResponseMessageType $value)
    {
        if ($this->findTagsResponseMessage === null) {
                        $this->findTagsResponseMessage = array();
        }

        if (!is_array($this->findTagsResponseMessage)) {
            $this->findTagsResponseMessage = array($this->findTagsResponseMessage);
        }

        $this->findTagsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return FindTagsResponseMessageType[]
     */
    public function getFindTagsResponseMessage()
    {
        return $this->findTagsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FindTagsResponseMessageType[]|FindTagsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setFindTagsResponseMessage(array|FindTagsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->findTagsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AddTagResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addAddTagResponseMessage(AddTagResponseMessageType $value)
    {
        if ($this->addTagResponseMessage === null) {
                        $this->addTagResponseMessage = array();
        }

        if (!is_array($this->addTagResponseMessage)) {
            $this->addTagResponseMessage = array($this->addTagResponseMessage);
        }

        $this->addTagResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return AddTagResponseMessageType[]
     */
    public function getAddTagResponseMessage()
    {
        return $this->addTagResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value AddTagResponseMessageType[]|AddTagResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setAddTagResponseMessage(array|AddTagResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->addTagResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value HideTagResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addHideTagResponseMessage(HideTagResponseMessageType $value)
    {
        if ($this->hideTagResponseMessage === null) {
                        $this->hideTagResponseMessage = array();
        }

        if (!is_array($this->hideTagResponseMessage)) {
            $this->hideTagResponseMessage = array($this->hideTagResponseMessage);
        }

        $this->hideTagResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return HideTagResponseMessageType[]
     */
    public function getHideTagResponseMessage()
    {
        return $this->hideTagResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value HideTagResponseMessageType[]|HideTagResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setHideTagResponseMessage(array|HideTagResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->hideTagResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetPasswordExpirationDateResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetPasswordExpirationDateResponse(GetPasswordExpirationDateResponseMessageType $value)
    {
        if ($this->getPasswordExpirationDateResponse === null) {
                        $this->getPasswordExpirationDateResponse = array();
        }

        if (!is_array($this->getPasswordExpirationDateResponse)) {
            $this->getPasswordExpirationDateResponse = array($this->getPasswordExpirationDateResponse);
        }

        $this->getPasswordExpirationDateResponse[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetPasswordExpirationDateResponseMessageType[]
     */
    public function getGetPasswordExpirationDateResponse()
    {
        return $this->getPasswordExpirationDateResponse;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetPasswordExpirationDateResponseMessageType[]|GetPasswordExpirationDateResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetPasswordExpirationDateResponse(array|GetPasswordExpirationDateResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getPasswordExpirationDateResponse = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetPersonaResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetPersonaResponseMessage(GetPersonaResponseMessageType $value)
    {
        if ($this->getPersonaResponseMessage === null) {
                        $this->getPersonaResponseMessage = array();
        }

        if (!is_array($this->getPersonaResponseMessage)) {
            $this->getPersonaResponseMessage = array($this->getPersonaResponseMessage);
        }

        $this->getPersonaResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetPersonaResponseMessageType[]
     */
    public function getGetPersonaResponseMessage()
    {
        return $this->getPersonaResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetPersonaResponseMessageType[]|GetPersonaResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetPersonaResponseMessage(array|GetPersonaResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getPersonaResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetConversationItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetConversationItemsResponseMessage(GetConversationItemsResponseMessageType $value)
    {
        if ($this->getConversationItemsResponseMessage === null) {
                        $this->getConversationItemsResponseMessage = array();
        }

        if (!is_array($this->getConversationItemsResponseMessage)) {
            $this->getConversationItemsResponseMessage = array($this->getConversationItemsResponseMessage);
        }

        $this->getConversationItemsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetConversationItemsResponseMessageType[]
     */
    public function getGetConversationItemsResponseMessage()
    {
        return $this->getConversationItemsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetConversationItemsResponseMessageType[]|GetConversationItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetConversationItemsResponseMessage(array|GetConversationItemsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getConversationItemsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetUserRetentionPolicyTagsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetUserRetentionPolicyTagsResponseMessage(GetUserRetentionPolicyTagsResponseMessageType $value)
    {
        if ($this->getUserRetentionPolicyTagsResponseMessage === null) {
                        $this->getUserRetentionPolicyTagsResponseMessage = array();
        }

        if (!is_array($this->getUserRetentionPolicyTagsResponseMessage)) {
            $this->getUserRetentionPolicyTagsResponseMessage = array($this->getUserRetentionPolicyTagsResponseMessage);
        }

        $this->getUserRetentionPolicyTagsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetUserRetentionPolicyTagsResponseMessageType[]
     */
    public function getGetUserRetentionPolicyTagsResponseMessage()
    {
        return $this->getUserRetentionPolicyTagsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * GetUserRetentionPolicyTagsResponseMessageType[]|GetUserRetentionPolicyTagsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetUserRetentionPolicyTagsResponseMessage(array|GetUserRetentionPolicyTagsResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getUserRetentionPolicyTagsResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetUserPhotoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetUserPhotoResponseMessage(GetUserPhotoResponseMessageType $value)
    {
        if ($this->getUserPhotoResponseMessage === null) {
                        $this->getUserPhotoResponseMessage = array();
        }

        if (!is_array($this->getUserPhotoResponseMessage)) {
            $this->getUserPhotoResponseMessage = array($this->getUserPhotoResponseMessage);
        }

        $this->getUserPhotoResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return GetUserPhotoResponseMessageType[]
     */
    public function getGetUserPhotoResponseMessage()
    {
        return $this->getUserPhotoResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value GetUserPhotoResponseMessageType[]|GetUserPhotoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetUserPhotoResponseMessage(array|GetUserPhotoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getUserPhotoResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MarkAsJunkResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addMarkAsJunkResponseMessage(MarkAsJunkResponseMessageType $value)
    {
        if ($this->markAsJunkResponseMessage === null) {
                        $this->markAsJunkResponseMessage = array();
        }

        if (!is_array($this->markAsJunkResponseMessage)) {
            $this->markAsJunkResponseMessage = array($this->markAsJunkResponseMessage);
        }

        $this->markAsJunkResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return MarkAsJunkResponseMessageType[]
     */
    public function getMarkAsJunkResponseMessage()
    {
        return $this->markAsJunkResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value MarkAsJunkResponseMessageType[]|MarkAsJunkResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setMarkAsJunkResponseMessage(array|MarkAsJunkResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->markAsJunkResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ReportMessageResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addReportMessageResponseMessage(ReportMessageResponseMessageType $value)
    {
        if ($this->reportMessageResponseMessage === null) {
                        $this->reportMessageResponseMessage = array();
        }

        if (!is_array($this->reportMessageResponseMessage)) {
            $this->reportMessageResponseMessage = array($this->reportMessageResponseMessage);
        }

        $this->reportMessageResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ReportMessageResponseMessageType[]
     */
    public function getReportMessageResponseMessage()
    {
        return $this->reportMessageResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value
     * ReportMessageResponseMessageType[]|ReportMessageResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setReportMessageResponseMessage(array|ReportMessageResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->reportMessageResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addPostModernGroupItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        if ($this->postModernGroupItemResponseMessage === null) {
                        $this->postModernGroupItemResponseMessage = array();
        }

        if (!is_array($this->postModernGroupItemResponseMessage)) {
            $this->postModernGroupItemResponseMessage = array($this->postModernGroupItemResponseMessage);
        }

        $this->postModernGroupItemResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ItemInfoResponseMessageType[]
     */
    public function getPostModernGroupItemResponseMessage()
    {
        return $this->postModernGroupItemResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType[]|ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setPostModernGroupItemResponseMessage(array|ItemInfoResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->postModernGroupItemResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetLastPrivateCatalogUpdateResponseMessage(ResponseMessageType $value)
    {
        if ($this->getLastPrivateCatalogUpdateResponseMessage === null) {
                        $this->getLastPrivateCatalogUpdateResponseMessage = array();
        }

        if (!is_array($this->getLastPrivateCatalogUpdateResponseMessage)) {
            $this->getLastPrivateCatalogUpdateResponseMessage = array($this->getLastPrivateCatalogUpdateResponseMessage);
        }

        $this->getLastPrivateCatalogUpdateResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getGetLastPrivateCatalogUpdateResponseMessage()
    {
        return $this->getLastPrivateCatalogUpdateResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetLastPrivateCatalogUpdateResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getLastPrivateCatalogUpdateResponseMessage = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetPrivateCatalogAddInsResponseMessage(ResponseMessageType $value)
    {
        if ($this->getPrivateCatalogAddInsResponseMessage === null) {
                        $this->getPrivateCatalogAddInsResponseMessage = array();
        }

        if (!is_array($this->getPrivateCatalogAddInsResponseMessage)) {
            $this->getPrivateCatalogAddInsResponseMessage = array($this->getPrivateCatalogAddInsResponseMessage);
        }

        $this->getPrivateCatalogAddInsResponseMessage[] = $value;
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ResponseMessageType[]
     */
    public function getGetPrivateCatalogAddInsResponseMessage()
    {
        return $this->getPrivateCatalogAddInsResponseMessage;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ResponseMessageType[]|ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function setGetPrivateCatalogAddInsResponseMessage(array|ResponseMessageType $value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }
        $this->getPrivateCatalogAddInsResponseMessage = $value;
        return $this;
    }
}
