<?php
/**
 * Add a child account
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\ChildAccounts;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Add
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\ChildAccounts
 */
class Add extends OptionsAbstract
{
    /**
     * @var string email address
     */
    protected $email;

    /**
     * @var string user password
     */
    protected $pwd;

    /**
     * @var string first name
     */
    protected $first_name;

    /**
     * @var string last name
     */
    protected $last_name;

    /**
     * @var string organization name
     */
    protected $organization_name;

    /**
     * @var string address
     */
    protected $address;

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
     * Set the password
     *
     * @param string $password
     * @return Add
     */
    public function setPassword($password)
    {
        $this->pwd = $password;
        return $this;
    }

    /**
     * Set the First Name
     *
     * @param string $firstName
     * @return Add
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
        return $this;
    }

    /**
     * Set the last name
     *
     * @param string $lastName
     * @return Add
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
        return $this;
    }

    /**
     * Set the organization name
     *
     * @param string $organizationName
     * @return Add
     */
    public function setOrganizationName($organizationName)
    {
        $this->organization_name = $organizationName;
        return $this;
    }

    /**
     * Set the address
     *
     * @param string $address
     * @return Add
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/participants';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}
