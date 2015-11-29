<?php
/**
 * Delete a google analytics domain
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\GoogleAnalytics;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Delete
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons
 */
class Delete extends OptionsAbstract
{
    /**
     * @var string the GA domain
     */
    protected $domain;

    /**
     * Set the domain to add
     *
     * @param $domain string
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/google_analytics/delete';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}