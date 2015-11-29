<?php
/**
 * Full list of All Drip campaigns and drips
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Drip
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons
 */
class Drip extends OptionsAbstract
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/drip_campaigns/list.xml';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}