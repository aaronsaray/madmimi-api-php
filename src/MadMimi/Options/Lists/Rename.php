<?php
/**
 * Rename a List
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Lists;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Rename
 * @package MadMimi\Options\Lists
 */
class Rename extends OptionsAbstract
{
    /**
     * @var string the name of the list to rename
     */
    private $currentName;

    /**
     * @var string the new name
     */
    protected $name;

    /**
     * The new name for the list
     *
     * @param $name string the new name
     * @return $this
     */
    public function setNewName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the name of the current list
     *
     * @param $name string sets the name of the list
     * @return $this
     */
    public function setName($name)
    {
        $this->currentName = $name;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_lists/{$this->currentName}/rename";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

}