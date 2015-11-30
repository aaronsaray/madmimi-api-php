<?php
/**
 * Update a child account list permissions
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\ChildAccounts;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Permissions
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\ChildAccounts
 */
class Permissions extends OptionsAbstract
{
    /**
     * @var string the user to edit
     */
    protected $email;

    /**
     * @var string a csv of lists to give full permission to
     */
    protected $full;

    /**
     * @var string a csv of lists to give read permission to
     */
    protected $read;

    /**
     * @var string a csv of lists to give no permission to
     */
    protected $none;

    /**
     * Set the email of the account to update
     *
     * @param $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * This sets the lists via their name to have full permission for this email user
     *
     * This will take care of formatting it properly for the API
     * @param array $lists
     * @return $this
     */
    public function setListsToFullPermission(array $lists)
    {
        return $this->setCsvValueFromArray('full', $lists);
    }

    /**
     * This sets the lists via their name to have read permission for this email user
     *
     * This will take care of formatting it properly for the API
     * @param array $lists
     * @return $this
     */
    public function setListsToReadPermission(array $lists)
    {
        return $this->setCsvValueFromArray('read', $lists);
    }

    /**
     * This sets the lists via their name to have no permission for this email user
     *
     * This will take care of formatting it properly for the API
     * @param array $lists
     * @return $this
     */
    public function setListsToNoPermission(array $lists)
    {
        return $this->setCsvValueFromArray('no', $lists);
    }

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/participants/update_permissions_for';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

}