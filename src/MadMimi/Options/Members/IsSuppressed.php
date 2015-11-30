<?php
/**
 * Get whether this member is suppressed or not
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class IsSuppressed
 * @package MadMimi\Options\Members
 */
class IsSuppressed extends OptionsAbstract
{
    /**
     * @var string the email to check
     */
    private $email;

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
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members/{$this->email}/is_suppressed";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }

}