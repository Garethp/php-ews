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
     * @autogenerated This method is safe to replace
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("createItemResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteItemResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("deleteItemResponseMessage", $value);

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
     * @return ResponseMessageType[]
     */
    public function getDeleteItemResponseMessage()
    {
        return $this->deleteItemResponseMessage;
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
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getItemResponseMessage", $value);

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
     * @param $value UpdateItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUpdateItemResponseMessage(UpdateItemResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("updateItemResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSendItemResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("sendItemResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteFolderResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("deleteFolderResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addEmptyFolderResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("emptyFolderResponseMessage", $value);

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
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("createFolderResponseMessage", $value);

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
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getFolderResponseMessage", $value);

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
     * @param $value FindFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindFolderResponseMessage(FindFolderResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("findFolderResponseMessage", $value);

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
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUpdateFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("updateFolderResponseMessage", $value);

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
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addMoveFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("moveFolderResponseMessage", $value);

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
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCopyFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("copyFolderResponseMessage", $value);

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
     * @param $value AttachmentInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateAttachmentResponseMessage(AttachmentInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("createAttachmentResponseMessage", $value);

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
     * @param $value DeleteAttachmentResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteAttachmentResponseMessage(DeleteAttachmentResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("deleteAttachmentResponseMessage", $value);

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
     * @param $value AttachmentInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetAttachmentResponseMessage(AttachmentInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getAttachmentResponseMessage", $value);

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
     * @param $value UploadItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUploadItemsResponseMessage(UploadItemsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("uploadItemsResponseMessage", $value);

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
     * @param $value ExportItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addExportItemsResponseMessage(ExportItemsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("exportItemsResponseMessage", $value);

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
     * @param $value FindItemResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindItemResponseMessage(FindItemResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("findItemResponseMessage", $value);

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
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addMoveItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("moveItemResponseMessage", $value);

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
     * @param $value ItemInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCopyItemResponseMessage(ItemInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("copyItemResponseMessage", $value);

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
     * @param $value ResolveNamesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addResolveNamesResponseMessage(ResolveNamesResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("resolveNamesResponseMessage", $value);

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
     * @param $value ExpandDLResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addExpandDLResponseMessage(ExpandDLResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("expandDLResponseMessage", $value);

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
     * @param $value GetServerTimeZonesResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetServerTimeZonesResponseMessage(GetServerTimeZonesResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getServerTimeZonesResponseMessage", $value);

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
     * @param $value GetEventsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetEventsResponseMessage(GetEventsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getEventsResponseMessage", $value);

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
     * @param $value GetStreamingEventsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetStreamingEventsResponseMessage(GetStreamingEventsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getStreamingEventsResponseMessage", $value);

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
     * @param $value SubscribeResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSubscribeResponseMessage(SubscribeResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("subscribeResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUnsubscribeResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("unsubscribeResponseMessage", $value);

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
     * @param $value SendNotificationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSendNotificationResponseMessage(SendNotificationResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("sendNotificationResponseMessage", $value);

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
     * @param $value SyncFolderHierarchyResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSyncFolderHierarchyResponseMessage(SyncFolderHierarchyResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("syncFolderHierarchyResponseMessage", $value);

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
     * @param $value SyncFolderItemsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addSyncFolderItemsResponseMessage(SyncFolderItemsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("syncFolderItemsResponseMessage", $value);

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
     * @param $value FolderInfoResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateManagedFolderResponseMessage(FolderInfoResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("createManagedFolderResponseMessage", $value);

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
     * @param $value ConvertIdResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addConvertIdResponseMessage(ConvertIdResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("convertIdResponseMessage", $value);

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
     * @param $value GetSharingMetadataResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetSharingMetadataResponseMessage(GetSharingMetadataResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getSharingMetadataResponseMessage", $value);

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
     * @param $value RefreshSharingFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addRefreshSharingFolderResponseMessage(RefreshSharingFolderResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("refreshSharingFolderResponseMessage", $value);

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
     * @param $value GetSharingFolderResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetSharingFolderResponseMessage(GetSharingFolderResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getSharingFolderResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addCreateUserConfigurationResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("createUserConfigurationResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addDeleteUserConfigurationResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("deleteUserConfigurationResponseMessage", $value);

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
     * @param $value GetUserConfigurationResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetUserConfigurationResponseMessage(GetUserConfigurationResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getUserConfigurationResponseMessage", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addUpdateUserConfigurationResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("updateUserConfigurationResponseMessage", $value);

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
     * @param $value GetRoomListsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetRoomListsResponse(GetRoomListsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getRoomListsResponse", $value);

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
     * @param $value GetRoomsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetRoomsResponse(GetRoomsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getRoomsResponse", $value);

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
     * @param $value ResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addApplyConversationActionResponseMessage(ResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("applyConversationActionResponseMessage", $value);

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
     * @return ResponseMessageType[]
     */
    public function getApplyConversationActionResponseMessage()
    {
        return $this->applyConversationActionResponseMessage;
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
     * @param $value FindMailboxStatisticsByKeywordsResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addFindMailboxStatisticsByKeywordsResponseMessage(FindMailboxStatisticsByKeywordsResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("findMailboxStatisticsByKeywordsResponseMessage", $value);

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
     * @param $value GetPasswordExpirationDateResponseMessageType
     * @return ArrayOfResponseMessagesType
     */
    public function addGetPasswordExpirationDateResponse(GetPasswordExpirationDateResponseMessageType $value)
    {
        $value = $this->castValueIfNeeded("getPasswordExpirationDateResponse", $value);

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
     * @param $value GetPasswordExpirationDateResponseMessageType[]
     * @return ArrayOfResponseMessagesType
     */
    public function setGetPasswordExpirationDateResponse(array $value)
    {
        $this->getPasswordExpirationDateResponse = $this->castValueIfNeeded("getPasswordExpirationDateResponse", $value);
        return $this;
    }
}
