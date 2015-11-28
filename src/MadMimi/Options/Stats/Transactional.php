<?php
/**
 * Transactional Mailer Status
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Transactional
 *
 * @see https://madmimi.com/developer/mailer/status
 * @package MadMimi\Options
 */
class Transactional extends OptionsAbstract
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
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
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