<?php
/**
 * order and suppressed trait
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

/**
 * Trait AllOrderAndSuppressedTrait
 * @package MadMimi\Options\Members
 */
trait AllOrderAndSuppressedTrait
{
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

}