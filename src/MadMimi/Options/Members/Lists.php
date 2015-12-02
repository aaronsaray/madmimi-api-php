<?php
/**
 * Get a members lists
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;


/**
 * Class Lists
 * @package MadMimi\Options\Members
 */
class Lists extends MemberOptionsAbstract
{
    /**
     * @var string
     */
    private $email;

    /**
     * Get the user by email
     *
     * @param $email string
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members/{$this->email}/lists.xml";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}