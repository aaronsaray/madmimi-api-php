<?php
/**
 * Transactional Count Stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class TransactionalCount
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class TransactionalCount extends StatsOptionsAbstract
{
    /**
     * @var string the promotion name
     */
    protected $promotion_name;

    /**
     * @var string the date in format YYYY-MM-DD
     */
    protected $date;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/promotions/transactional_count";
    }

    /**
     * Set the promotion name
     *
     * @param $promotionName string
     * @return $this
     */
    public function setPromotionName($promotionName)
    {
        $this->promotion_name = $promotionName;
        return $this;
    }

    /**
     * Set the date for the count
     *
     * @param $date \DateTime
     * @return $this
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date->format('Y-m-d');
        return $this;
    }
}