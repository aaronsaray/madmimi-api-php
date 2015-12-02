<?php
/**
 * Get all Members of the audience
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\PaginationTrait;

/**
 * Class All
 * @package MadMimi\Options\Members
 */
class All extends MemberOptionsAbstract
{
    use PaginationTrait;
    use AllOrderAndSuppressedTrait;

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return '/audience_members.xml';
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }

}