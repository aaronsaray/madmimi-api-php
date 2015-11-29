<?php
/**
 * The Audience Members Created Count Stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class MembersCreatedCount
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class MembersCreatedCount extends StatsOptionsAbstract
{
    /**
     * @var int a unix timestamp
     */
    protected $start;

    /**
     * @var int a unix timestamp
     */
    protected $end;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/audience_members/count_new";
    }

    /**
     * Set the start date for the count
     *
     * @param $date \DateTime
     * @return $this
     */
    public function setStartDate(\DateTime $date)
    {
        $this->start = $date->format('U');
        return $this;
    }

    /**
     * Set the end date for the count
     *
     * @param $date \DateTime
     * @return $this
     */
    public function setEndDate(\DateTime $date)
    {
        $this->end = $date->format('U');
        return $this;
    }
}