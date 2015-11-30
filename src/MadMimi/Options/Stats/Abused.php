<?php
/**
 * Abused stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;
use MadMimi\Options\PaginationTrait;

/**
 * Class Abused
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class Abused extends StatsOptionsAbstract
{
    use PromotionMailingBaseTrait;
    use PaginationTrait;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/promotions/{$this->promotionId}/mailings/{$this->mailingId}/abused.xml";
    }
}