<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SetFolderFieldType
 *
 *
 * XSD Type: SetFolderFieldType
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
     * @autogenerated This method is safe to replace
     * @return FolderType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value FolderType
     * @return SetFolderFieldType
     */
    public function setFolder(FolderType $value)
    {
        $this->folder = $this->castValueIfNeeded("folder", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return CalendarFolderType
     */
    public function getCalendarFolder()
    {
        return $this->calendarFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value CalendarFolderType
     * @return SetFolderFieldType
     */
    public function setCalendarFolder(CalendarFolderType $value)
    {
        $this->calendarFolder = $this->castValueIfNeeded("calendarFolder", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return ContactsFolderType
     */
    public function getContactsFolder()
    {
        return $this->contactsFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value ContactsFolderType
     * @return SetFolderFieldType
     */
    public function setContactsFolder(ContactsFolderType $value)
    {
        $this->contactsFolder = $this->castValueIfNeeded("contactsFolder", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return SearchFolderType
     */
    public function getSearchFolder()
    {
        return $this->searchFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value SearchFolderType
     * @return SetFolderFieldType
     */
    public function setSearchFolder(SearchFolderType $value)
    {
        $this->searchFolder = $this->castValueIfNeeded("searchFolder", $value);
        return $this;
    }

    /**
     * @autogenerated This method is safe to replace
     * @return TasksFolderType
     */
    public function getTasksFolder()
    {
        return $this->tasksFolder;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value TasksFolderType
     * @return SetFolderFieldType
     */
    public function setTasksFolder(TasksFolderType $value)
    {
        $this->tasksFolder = $this->castValueIfNeeded("tasksFolder", $value);
        return $this;
    }
}
