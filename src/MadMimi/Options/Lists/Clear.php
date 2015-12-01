<?php
/**
 * Clear a List of Members
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Lists;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Clear
 * @package MadMimi\Options\Lists
 */
class Clear extends OptionsAbstract
{
    /**
     * @var string the name of the list
     */
    private $name;

    /**
     * Set the name of the current list
     *
     * @param $name string sets the name of the list
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_lists/{$this->name}/clear";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_PUT;
    }

}