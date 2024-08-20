<?php

namespace garethp\ews\API\Type;

/**
 * Class representing TaskType
 *
 *
 * XSD Type: TaskType
 *
 * @method TaskType setActualWork(integer $actualWork)
 * @method TaskType setAssignedTime(\DateTime $assignedTime)
 * @method TaskType setBillingInformation(string $billingInformation)
 * @method TaskType setChangeCount(integer $changeCount)
 * @method TaskType addCompanies(string $companies)
 * @method TaskType setCompanies(array $companies)
 * @method TaskType setCompleteDate(\DateTime $completeDate)
 * @method TaskType addContacts(string $contacts)
 * @method TaskType setContacts(array $contacts)
 * @method TaskType setDelegationState(string $delegationState)
 * @method TaskType setDelegator(string $delegator)
 * @method TaskType setDueDate(\DateTime $dueDate)
 * @method TaskType setIsAssignmentEditable(integer $isAssignmentEditable)
 * @method TaskType setIsComplete(boolean $isComplete)
 * @method TaskType setIsRecurring(boolean $isRecurring)
 * @method TaskType setIsTeamTask(boolean $isTeamTask)
 * @method TaskType setMileage(string $mileage)
 * @method TaskType setOwner(string $owner)
 * @method TaskType setPercentComplete(float $percentComplete)
 * @method TaskType setRecurrence(TaskRecurrenceType $recurrence)
 * @method TaskType setStartDate(\DateTime $startDate)
 * @method TaskType setStatus(string $status)
 * @method TaskType setStatusDescription(string $statusDescription)
 * @method TaskType setTotalWork(integer $totalWork)
 */
class TaskType extends ItemType
{

    /**
     * @var integer
     */
    protected $actualWork = null;

    /**
     * @var \DateTime
     */
    protected $assignedTime = null;

    protected $_typeMap = array(
        'assignedTime' => 'dateTime',
        'completeDate' => 'dateTime',
        'dueDate' => 'dateTime',
        'startDate' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $billingInformation = null;

    /**
     * @var integer
     */
    protected $changeCount = null;

    /**
     * @var string[]
     */
    protected $companies = null;

    /**
     * @var \DateTime
     */
    protected $completeDate = null;

    /**
     * @var string[]
     */
    protected $contacts = null;

    /**
     * @var string
     */
    protected $delegationState = null;

    /**
     * @var string
     */
    protected $delegator = null;

    /**
     * @var \DateTime
     */
    protected $dueDate = null;

    /**
     * @var integer
     */
    protected $isAssignmentEditable = null;

    /**
     * @var boolean
     */
    protected $isComplete = null;

    /**
     * @var boolean
     */
    protected $isRecurring = null;

    /**
     * @var boolean
     */
    protected $isTeamTask = null;

    /**
     * @var string
     */
    protected $mileage = null;

    /**
     * @var string
     */
    protected $owner = null;

    /**
     * @var float
     */
    protected $percentComplete = null;

    /**
     * @var \garethp\ews\API\Type\TaskRecurrenceType
     */
    protected $recurrence = null;

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    /**
     * @var string
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $statusDescription = null;

    /**
     * @var integer
     */
    protected $totalWork = null;

    /**
     * @return integer
     */
    public function getActualWork()
    {
        return $this->actualWork;
    }

    /**
     * @return \DateTime
     */
    public function getAssignedTime()
    {
        return $this->assignedTime;
    }

    /**
     * @return string
     */
    public function getBillingInformation()
    {
        return $this->billingInformation;
    }

    /**
     * @return integer
     */
    public function getChangeCount()
    {
        return $this->changeCount;
    }

    /**
     * @return string[]
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @return \DateTime
     */
    public function getCompleteDate()
    {
        return $this->completeDate;
    }

    /**
     * @return string[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @return string
     */
    public function getDelegationState()
    {
        return $this->delegationState;
    }

    /**
     * @return string
     */
    public function getDelegator()
    {
        return $this->delegator;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @return integer
     */
    public function getIsAssignmentEditable()
    {
        return $this->isAssignmentEditable;
    }

    /**
     * @returns bool
     */
    public function isComplete()
    {
        return ((bool) $this->isComplete);
    }

    /**
     * @return boolean
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @returns bool
     */
    public function isRecurring()
    {
        return ((bool) $this->isRecurring);
    }

    /**
     * @return boolean
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * @returns bool
     */
    public function isTeamTask()
    {
        return ((bool) $this->isTeamTask);
    }

    /**
     * @return boolean
     */
    public function getIsTeamTask()
    {
        return $this->isTeamTask;
    }

    /**
     * @return string
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return float
     */
    public function getPercentComplete()
    {
        return $this->percentComplete;
    }

    /**
     * @return TaskRecurrenceType
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * @return integer
     */
    public function getTotalWork()
    {
        return $this->totalWork;
    }
}
