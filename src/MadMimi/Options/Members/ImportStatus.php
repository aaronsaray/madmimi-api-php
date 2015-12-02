<?php
/**
 * Import Members Status
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class ImportStatus
 * @package MadMimi\Options\Members
 */
class ImportStatus extends OptionsAbstract
{
    /**
     * @var integer the import ID
     */
    private $importId;

    /**
     * Set the import ID
     *
     * @param $id integer the id
     * @return $this
     */
    public function setImportId($id)
    {
        $this->importId = $id;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return "/audience_imports/{$this->importId}/status";
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}