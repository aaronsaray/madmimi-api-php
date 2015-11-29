<?php
/**
 * Full list of All Social Links Available
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\SocialLinks;
use MadMimi\Options\OptionsAbstract;

/**
 * Class All
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\SocialLinks
 */
class All extends OptionsAbstract
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/social_links/available.xml';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}