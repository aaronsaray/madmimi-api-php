<?php
/**
 * Delete a promotion
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Promotions;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Delete
 * @package MadMimi\Options\Promotions
 */
class Delete extends OptionsAbstract
{
    /**
     * @var integer the id of this promotion
     */
    private $id;

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
        return "/promotions/{$this->id}/trash";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_PUT;
    }
}