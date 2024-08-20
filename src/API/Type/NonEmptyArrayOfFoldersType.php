<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfFoldersType
 *
 *
 * XSD Type: NonEmptyArrayOfFoldersType
 *
 * @method NonEmptyArrayOfFoldersType addFolder(FolderType $folder)
 * @method NonEmptyArrayOfFoldersType setFolder(array $folder)
 * @method NonEmptyArrayOfFoldersType addCalendarFolder(CalendarFolderType $calendarFolder)
 * @method NonEmptyArrayOfFoldersType setCalendarFolder(array $calendarFolder)
 * @method NonEmptyArrayOfFoldersType addContactsFolder(ContactsFolderType $contactsFolder)
 * @method NonEmptyArrayOfFoldersType setContactsFolder(array $contactsFolder)
 * @method NonEmptyArrayOfFoldersType addSearchFolder(SearchFolderType $searchFolder)
 * @method NonEmptyArrayOfFoldersType setSearchFolder(array $searchFolder)
 * @method NonEmptyArrayOfFoldersType addTasksFolder(TasksFolderType $tasksFolder)
 * @method NonEmptyArrayOfFoldersType setTasksFolder(array $tasksFolder)
 */
class NonEmptyArrayOfFoldersType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderType[]
     */
    protected $folder = null;

    /**
     * @var \garethp\ews\API\Type\CalendarFolderType[]
     */
    protected $calendarFolder = null;

    /**
     * @var \garethp\ews\API\Type\ContactsFolderType[]
     */
    protected $contactsFolder = null;

    /**
     * @var \garethp\ews\API\Type\SearchFolderType[]
     */
    protected $searchFolder = null;

    /**
     * @var \garethp\ews\API\Type\TasksFolderType[]
     */
    protected $tasksFolder = null;

    /**
     * @return FolderType[]
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @return CalendarFolderType[]
     */
    public function getCalendarFolder()
    {
        return $this->calendarFolder;
    }

    /**
     * @return ContactsFolderType[]
     */
    public function getContactsFolder()
    {
        return $this->contactsFolder;
    }

    /**
     * @return SearchFolderType[]
     */
    public function getSearchFolder()
    {
        return $this->searchFolder;
    }

    /**
     * @return TasksFolderType[]
     */
    public function getTasksFolder()
    {
        return $this->tasksFolder;
    }
}
