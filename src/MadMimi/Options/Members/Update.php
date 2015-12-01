<?php
/**
 * Updates a member
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Update
 * @package MadMimi\Options\Members
 */
class Update extends OptionsAbstract
{
    /**
     * @var string the original email
     */
    private $email;

    /**
     * @var array the attributes to change
     */
    protected $audience_member;

    /**
     * @var array the lists to add or remove
     */
    protected $lists;

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
     * Set the attributes for this user.  For the proper format, see link
     * @link https://madmimi.com/developer/lists/audience-update
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->audience_member = $attributes;
        return $this;
    }

    /**
     * Add this user to these lists
     *
     * @param array $listIds integers of the ids of lists
     * @return $this
     */
    public function addToLists(array $listIds)
    {
        if (empty($this->lists)) $this->lists = [];
        $this->lists['add'] = implode(',', $listIds);
        return $this;
    }

    /**
     * Remove user from these lists
     *
     * @param array $listIds integers of the ids of the lists
     * @return $this
     */
    public function removeFromLists(array $listIds)
    {
        if (empty($this->lists)) $this->lists = [];
        $this->lists['remove'] = implode(',', $listIds);
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members/{$this->email}";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_PUT;
    }

}