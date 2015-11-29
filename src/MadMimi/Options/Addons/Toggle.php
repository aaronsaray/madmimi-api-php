<?php
/**
 * Toggle one of the user's addons
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Toggle
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons
 */
class Toggle extends OptionsAbstract
{
    /**
     * @var string the key of the addon to toggle
     */
    private $key;

    /**
     * Set the Key of the addon to toggle
     *
     * @param $key string
     * @return $this
     */
    public function setAddonKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/addons/{$this->key}/toggle";
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}