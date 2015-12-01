<?php
/**
 * Add a List
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Lists;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Add
 * @package MadMimi\Options\Lists
 */
class Add extends OptionsAbstract
{
    /**
     * @var string the name of the list
     */
    protected $name;

    /**
     * Set the name of the new list
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
        return "/audience_lists";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

}