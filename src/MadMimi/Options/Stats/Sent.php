<?php
/**
 * Sent Stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class Transactional
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class Sent extends StatsOptionsAbstract
{
    use PromotionMailingBaseTrait;
    use PaginationTrait;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/promotions/{$this->promotionId}/mailings/{$this->mailingId}/sent.xml";
    }
}