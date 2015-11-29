<?php
/**
 * Full list of All Child Accounts on this main account
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\ChildAccounts;
use MadMimi\Options\OptionsAbstract;

/**
 * Class All
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\ChildAccounts
 */
class All extends OptionsAbstract
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/participants.xml';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}