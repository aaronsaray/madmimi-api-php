<?php
/**
 * Clicked Unsubscribed
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class Unsubscribed
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class Unsubscribed extends StatsOptionsAbstract
{
    use PromotionMailingBaseTrait;
    use PaginationTrait;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/promotions/{$this->promotionId}/mailings/{$this->mailingId}/opt_out.xml";
    }
}