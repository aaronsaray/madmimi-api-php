<?php
/**
 * Get a single member via email
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;


/**
 * Class Single
 * @package MadMimi\Options\Members
 */
class Single extends MemberOptionsAbstract
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var integer 0 or 1 for true or false
     */
    protected $raw;

    /**
     * Whether to include suppressed members in this list
     *
     * @param bool|true $includeSuppressedMembers
     * @return All
     */
    public function setIncludeSuppressedMembers($includeSuppressedMembers = true)
    {
        return $this->translateBooleanToInteger('raw', $includeSuppressedMembers);
    }

    /**
     * Get the user by email - so this is the key
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
        return '/audience_members/search.xml';
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}