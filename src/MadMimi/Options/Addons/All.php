<?php
/**
 * Full list of All Addons Available
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons;
use MadMimi\Options\OptionsAbstract;

/**
 * Class All
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons
 */
class All extends OptionsAbstract
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/addons/available.xml';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}