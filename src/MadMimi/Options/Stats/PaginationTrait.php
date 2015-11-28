<?php
/**
 * Pagination functionality
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;

/**
 * Class PaginationTrait
 * @package MadMimi\Options\Stats
 */
trait PaginationTrait
{
    /**
     * @var int the page number to retrieve
     */
    protected $page;

    /**
     * @var int the amount per page
     */
    protected $per_page;

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
     * Set the amount of records per page
     *
     * @param $recordsPerPage integer the amount of records per page
     * @return $this
     */
    public function setRecordsPerPage($recordsPerPage)
    {
        $this->per_page = $recordsPerPage;
        return $this;
    }
}