<?php
/**
 * Import Members to Audience
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Import
 * @package MadMimi\Options\Members
 */
class Import extends OptionsAbstract
{
    /**
     * @var string the csv file data
     */
    protected $csv_file;

    /**
     * @var string the name of the list to import into
     */
    protected $audience_list;

    /**
     * Set the csv file data
     *
     * @param $data string the csv file data
     * @return $this
     */
    public function setCsvFileData($data)
    {
        $this->csv_file = $data;
        return $this;
    }

    /**
     * Set the name of the list to import to
     *
     * @param $listName string sets the name of the list to import to
     * @return $this
     */
    public function setListName($listName)
    {
        $this->audience_list = $listName;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_members";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}