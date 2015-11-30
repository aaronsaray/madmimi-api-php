<?php
/**
 * Get all Members of the audience
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;
use MadMimi\Options\PaginationTrait;

/**
 * Class All
 * @package MadMimi\Options\Members
 */
class All extends OptionsAbstract
{
    use PaginationTrait;

    /**
     * @var string order of the results
     */
    protected $order;

    /**
     * @var integer 0 or 1 for true or false
     */
    protected $raw;

    /**
     * @var integer 0 or 1 for true or false
     */
    protected $suppressed_only;

    /**
     * Set the order of the records
     *
     * @see https://madmimi.com/developer/get_audience_members
     * @param $order string order of the records
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

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
     * Show only the suppressed members of the account
     *
     * @param bool|true $suppressedMembersOnly
     * @return All
     */
    public function setSuppressedMembersOnly($suppressedMembersOnly = true)
    {
        return $this->translateBooleanToInteger('suppressed_only', $suppressedMembersOnly);
    }

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

    /**
     * @param $key string the key
     * @param $bool boolean true or false
     * @return $this
     */
    protected function translateBooleanToInteger($key, $bool)
    {
        if (!is_bool($bool)) throw new \DomainException('Parameter of ' . debug_backtrace()[1]['function'] . ' must be a boolean');

        $this->$key = intval($bool);
        return $this;
    }
}