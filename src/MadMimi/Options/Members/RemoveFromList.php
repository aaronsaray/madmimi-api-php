<?php
/**
 * Remove a member from a list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class RemoveFromList
 * @package MadMimi\Options\Members
 */
class RemoveFromList extends OptionsAbstract
{
    /**
     * @var string the email to remove
     */
    protected $email;

    /**
     * @var string the name of the list to remove them from
     */
    private $listName;

    /**
     * Set the email
     *
     * @param $email string the email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the name of the list
     *
     * @param $listName string sets the name of the list
     * @return $this
     */
    public function setListName($listName)
    {
        $this->listName = $listName;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_lists/{$this->listName}/remove";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

}