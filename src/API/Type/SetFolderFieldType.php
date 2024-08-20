<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SetFolderFieldType
 *
 *
 * XSD Type: SetFolderFieldType
 *
 * @method SetFolderFieldType setFolder(FolderType $folder)
 * @method SetFolderFieldType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method SetFolderFieldType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SetFolderFieldType setSearchFolder(SearchFolderType $searchFolder)
 * @method SetFolderFieldType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SetFolderFieldType extends FolderChangeDescriptionType
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
