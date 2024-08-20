<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderHierarchyCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderHierarchyCreateOrUpdateType
 *
 * @method SyncFolderHierarchyCreateOrUpdateType setFolder(FolderType $folder)
 * @method SyncFolderHierarchyCreateOrUpdateType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType setSearchFolder(SearchFolderType $searchFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderType
     */
    protected $folder = null;

    /**
     * @var \garethp\ews\API\Type\CalendarFolderType
     */
    protected $calendarFolder = null;

    /**
     * @var \garethp\ews\API\Type\ContactsFolderType
     */
    protected $contactsFolder = null;

    /**
     * @var \garethp\ews\API\Type\SearchFolderType
     */
    protected $searchFolder = null;

    /**
     * @var \garethp\ews\API\Type\TasksFolderType
     */
    protected $tasksFolder = null;

    /**
     * @return FolderType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @return CalendarFolderType
     */
    public function getCalendarFolder()
    {
        return $this->calendarFolder;
    }

    /**
     * @return ContactsFolderType
     */
    public function getContactsFolder()
    {
        return $this->contactsFolder;
    }

    /**
     * @return SearchFolderType
     */
    public function getSearchFolder()
    {
        return $this->searchFolder;
    }

    /**
     * @return TasksFolderType
     */
    public function getTasksFolder()
    {
        return $this->tasksFolder;
    }
}
