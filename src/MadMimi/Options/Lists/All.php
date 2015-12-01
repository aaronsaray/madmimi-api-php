<?php
/**
 * Get all lists
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Lists;

use MadMimi\Options\OptionsAbstract;

/**
 * Class All
 * @package MadMimi\Options\Lists
 */
class All extends OptionsAbstract
{
    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_lists/lists.xml";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}