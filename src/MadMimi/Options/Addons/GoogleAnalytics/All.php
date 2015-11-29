<?php
/**
 * Full list of All Google Analytics Domains
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\GoogleAnalytics;
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
        return '/google_analytics.xml';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}