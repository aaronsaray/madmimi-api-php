<?php
/**
 * Full list of Webforms Options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Webforms;
use MadMimi\Options\OptionsAbstract;

/**
 * Class All
 *
 * @see https://madmimi.com/developer/webform-api-methods
 * @package MadMimi\Options\Webforms
 */
class All extends OptionsAbstract
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/signups.json';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}