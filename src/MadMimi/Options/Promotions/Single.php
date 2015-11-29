<?php
/**
 * Get a single promotion
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Promotions;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Single
 * @package MadMimi\Options\Promotions
 */
class Single extends OptionsAbstract
{
    /**
     * @var integer the id of this promotion
     */
    protected $id;

    /**
     * Set the promotion ID
     *
     * @param $promotionId integer
     * @return $this
     */
    public function setPromotionId($promotionId)
    {
        $this->id = $promotionId;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return '/promotions/search.xml';
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}