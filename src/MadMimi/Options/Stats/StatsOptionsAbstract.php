<?php
/**
 * Shared functionality for all stats objects
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

use MadMimi\Options\OptionsAbstract;

/**
 * Class StatsOptionsAbstract
 * @package MadMimi\Options\Stats
 */
abstract class StatsOptionsAbstract extends OptionsAbstract
{
    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}