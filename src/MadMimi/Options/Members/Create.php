<?php
/**
 * Create a member
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Create
 * @package MadMimi\Options\Members
 */
class Create extends OptionsAbstract
{
    /**
     * @var string the email to check
     */
    protected $email;

    /**
     * @var string the name of the person to create
     */
    protected $name;

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
     * Set the name of the new member
     *
     * @param $name string sets the name of the user
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

}