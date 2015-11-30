<?php
/**
 * Get members suppressed since a particular time
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class SuppressedSince
 * @package MadMimi\Options\Members
 */
class SuppressedSince extends OptionsAbstract
{
    /**
     * @var integer the timestamp to query
     */
    private $timestamp;

    /**
     * @var boolean whether to show the suppression reason
     */
    protected $show_suppression_reason;

    /**
     * Set the beginning of the range
     *
     * @param $fromDate \DateTime the from date
     * @return $this
     */
    public function setFromDate(\DateTime $fromDate)
    {
        $this->timestamp = $fromDate->format('U');
        return $this;
    }

    /**
     * Whether to show suppression reason or not
     *
     * @param boolean $showSuppressionReason
     * @return SuppressedSince
     */
    public function setShowSuppressionReason($showSuppressionReason = true)
    {
        $this->show_suppression_reason = $showSuppressionReason;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members/suppressed_since/{$this->timestamp}.txt";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}