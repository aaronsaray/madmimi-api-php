<?php
/**
 * Transactional Mailer Status
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class Transactional
 *
 * @see https://madmimi.com/developer/mailer/status
 * @package MadMimi\Options\Stats
 */
class Transactional extends StatsOptionsAbstract
{
    /**
     * @var string the transaction ID
     */
    private $transactionId;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/mailers/status/{$this->transactionId}";
    }

    /**
     * @param $transactionId
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
}