<?php
/**
 * Get member events since a specific time
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class EventsSince
 * @package MadMimi\Options\Members
 */
class EventsSince extends OptionsAbstract
{
    /**
     * @var integer the timestamp to query
     */
    private $timestamp;

    /**
     * @var string the email to filter by
     */
    protected $email;

    /**
     * @var string the action type to filter by
     */
    protected $action_type;

    /**
     * @var string the last name to filter by
     */
    protected $list_name;

    /**
     * Set the beginning of the range
     *
     * @param $fromDate \DateTime the from date
     * @return $this
     */
    public function setFromDate(\DateTime $fromDate)
    {
        $this->timestamp = $fromDate->format('U');
        return $this;
    }

    /**
     * Set the email filter
     *
     * @param $email string the email to filter by
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Filter by this action type
     *
     * @param $actionType string the action type
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->action_type = $actionType;
        return $this;
    }

    /**
     * Set the list name to filter by
     *
     * @param $listName string the list name
     * @return $this
     */
    public function setListName($listName)
    {
        $this->list_name = $listName;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members/events_since/{$this->timestamp}.xml";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}