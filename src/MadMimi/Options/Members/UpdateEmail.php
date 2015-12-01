<?php
/**
 * Updates a member email
 *
 * This is separate than Update because the email is the key
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class UpdateEmail
 * @package MadMimi\Options\Members
 */
class UpdateEmail extends OptionsAbstract
{
    /**
     * @var string the original email
     */
    private $email;

    /**
     * @var string the name of the person to create
     */
    protected $new_email;

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
     * Set the new email of the member
     *
     * @param $email string the new email
     * @return $this
     */
    public function setNewEmail($email)
    {
        $this->new_email = $email;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members/{$this->email}/update_email";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

}