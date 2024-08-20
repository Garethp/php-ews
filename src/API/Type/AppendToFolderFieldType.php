<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AppendToFolderFieldType
 *
 *
 * XSD Type: AppendToFolderFieldType
 *
 * @method AppendToFolderFieldType setFolder(FolderType $folder)
 * @method AppendToFolderFieldType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method AppendToFolderFieldType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method AppendToFolderFieldType setSearchFolder(SearchFolderType $searchFolder)
 * @method AppendToFolderFieldType setTasksFolder(TasksFolderType $tasksFolder)
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
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
