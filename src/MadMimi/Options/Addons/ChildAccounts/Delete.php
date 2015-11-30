<?php
/**
 * Delete a child account
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\ChildAccounts;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Delete
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\ChildAccounts
 */
class Delete extends OptionsAbstract
{
    /**
     * @var string email address
     */
    protected $email;

    /**
     * Set the email
     *
     * @param string $email
     * @return Add
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/participants/destroy';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}