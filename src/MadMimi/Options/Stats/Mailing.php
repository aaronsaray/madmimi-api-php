<?php
/**
 * Mailing Stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Transactional
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class Mailing extends OptionsAbstract
{
    /**
     * @var string the promotion ID
     */
    private $promotionId;

    /**
     * @var string the mailing ID
     */
    private $mailingId;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/promotions/{$this->promotionId}/mailings/{$this->mailingId}.xml";
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }

    /**
     * @param string $promotionId
     * @return Mailing
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @param string $mailingId
     * @return Mailing
     */
    public function setMailingId($mailingId)
    {
        $this->mailingId = $mailingId;
        return $this;
    }
}