<?php
/**
 * Update a child account
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\ChildAccounts;

/**
 * Class Update - same items as Add - just a different endpoint
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\ChildAccounts
 */
class Update extends Add
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/participants/update';
    }
}