<?php
/**
 * Get a single webform details
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Webforms;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Single
 *
 * @see https://madmimi.com/developer/webform-api-methods
 * @package MadMimi\Options\Webforms
 */
class Single extends OptionsAbstract
{
    /**
     * @var int the webform id
     */
    private $webformId;

    /**
     * Set the webform ID
     * @param $webformId int
     * @return $this
     */
    public function setWebformId($webformId)
    {
        $this->webformId = $webformId;
        return $this;
    }

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/signups/{$this->webformId}.json";
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}