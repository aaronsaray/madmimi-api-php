<?php
/**
 * Base functionality for items that require promotion and mailing
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class PromotionMailingBaseTrait
 * @package MadMimi\Options\Stats
 */
trait PromotionMailingBaseTrait
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