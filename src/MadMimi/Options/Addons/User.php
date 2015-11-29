<?php
/**
 * List of All the User's Addons
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons;
use MadMimi\Options\OptionsAbstract;

/**
 * Class User
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons
 */
class User extends OptionsAbstract
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/addons.xml';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}