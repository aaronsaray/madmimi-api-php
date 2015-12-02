<?php
/**
 * Get all Members of a list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\PaginationTrait;

/**
 * Class AllByList
 * @package MadMimi\Options\Members
 */
class AllByList extends MemberOptionsAbstract
{
    use PaginationTrait;
    use AllOrderAndSuppressedTrait;

    /**
     * @var string the list name
     */
    private $listName;

    /**
     * Set the list name
     *
     * @param $listName string the list name
     * @return $this
     */
    public function setListName($listName)
    {
        $this->listName = $listName;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_lists/{$this->listName}/members.xml";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }

}