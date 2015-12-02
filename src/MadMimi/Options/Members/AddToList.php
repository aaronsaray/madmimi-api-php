<?php
/**
 * Add a member to a list
 *
 * @note at this time you can't create members this way - sorry!
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class AddToList
 * @package MadMimi\Options\Members
 */
class AddToList extends OptionsAbstract
{
    /**
     * @var string the email to remove
     */
    protected $email;

    /**
     * @var string the name of the list to add them to
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
        return "/audience_lists/{$this->listName}/add";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}