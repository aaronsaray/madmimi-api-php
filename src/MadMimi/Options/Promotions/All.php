<?php
/**
 * Get all promotions
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Promotions;

use MadMimi\Options\OptionsAbstract;

/**
 * Class All
 * @package MadMimi\Options\Promotions
 */
class All extends OptionsAbstract
{
    /**
     * @var int the page number to retrieve
     */
    protected $page;

    /**
     * Set the current page of this result
     *
     * @param $page integer the Page number to retrieve
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return '/promotions.xml';
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}