<?php
/**
 * Search members via query
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

/**
 * Class Search
 * @package MadMimi\Options\Members
 */
class Search extends MemberOptionsAbstract
{
    /**
     * @var string the query to search via
     */
    protected $query;

    /**
     * @var integer 0 or 1 for true or false
     */
    protected $raw;

    /**
     * Whether to include suppressed members in this list
     *
     * @param bool|true $includeSuppressedMembers
     * @return All
     */
    public function setIncludeSuppressedMembers($includeSuppressedMembers = true)
    {
        return $this->translateBooleanToInteger('raw', $includeSuppressedMembers);
    }

    /**
     * set the query to search by
     *
     * @param $query string
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return '/audience_members/search.xml';
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}