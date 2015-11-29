<?php
/**
 * Abused stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class PromotionAttempts
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class PromotionAttempts extends StatsOptionsAbstract
{
    /**
     * @var string the email to check promotions on
     */
    private $email;

    /**
     * Set the email for this query
     *
     * @param $email string the email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/audience_members/{$this->email}/promotion_attempts.xml";
    }
}