<?php
/**
 * Clicked Stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class Clicked
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class Clicked extends StatsOptionsAbstract
{
    use PromotionMailingBaseTrait;
    use PaginationTrait;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/promotions/{$this->promotionId}/mailings/{$this->mailingId}/clicked_thru.xml";
    }
}