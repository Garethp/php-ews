<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing DelegatePermissionsType
 *
 *
 * XSD Type: DelegatePermissionsType
 *
 * @method DelegatePermissionsType setCalendarFolderPermissionLevel(string $calendarFolderPermissionLevel)
 * @method DelegatePermissionsType setTasksFolderPermissionLevel(string $tasksFolderPermissionLevel)
 * @method DelegatePermissionsType setInboxFolderPermissionLevel(string $inboxFolderPermissionLevel)
 * @method DelegatePermissionsType setContactsFolderPermissionLevel(string $contactsFolderPermissionLevel)
 * @method DelegatePermissionsType setNotesFolderPermissionLevel(string $notesFolderPermissionLevel)
 * @method DelegatePermissionsType setJournalFolderPermissionLevel(string $journalFolderPermissionLevel)
 */
class DelegatePermissionsType extends Type
{

    /**
     * @var string
     */
    protected $calendarFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $tasksFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $inboxFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $contactsFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $notesFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $journalFolderPermissionLevel = null;

    /**
     * @return string
     */
    public function getCalendarFolderPermissionLevel()
    {
        return $this->calendarFolderPermissionLevel;
    }

    /**
     * @return string
     */
    public function getTasksFolderPermissionLevel()
    {
        return $this->tasksFolderPermissionLevel;
    }

    /**
     * @return string
     */
    public function getInboxFolderPermissionLevel()
    {
        return $this->inboxFolderPermissionLevel;
    }

    /**
     * @return string
     */
    public function getContactsFolderPermissionLevel()
    {
        return $this->contactsFolderPermissionLevel;
    }

    /**
     * @return string
     */
    public function getNotesFolderPermissionLevel()
    {
        return $this->notesFolderPermissionLevel;
    }

    /**
     * @return string
     */
    public function getJournalFolderPermissionLevel()
    {
        return $this->journalFolderPermissionLevel;
    }
}
