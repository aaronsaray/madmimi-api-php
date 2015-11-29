<?php
/**
 * List of All the User's Social Links
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\SocialLinks;
use MadMimi\Options\OptionsAbstract;

/**
 * Class User
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\SocialLinks
 */
class User extends OptionsAbstract
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/social_links.xml';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}