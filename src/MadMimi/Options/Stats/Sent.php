<?php
/**
 * Sent Stats
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Stats;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Transactional
 *
 * @see https://madmimi.com/developer/statistics-api-methods
 * @package MadMimi\Options\Stats
 */
class Sent extends OptionsAbstract
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
     * @var string the promotion ID
     */
    private $promotionId;

    /**
     * @var string the mailing ID
     */
    private $mailingId;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/promotions/{$this->promotionId}/mailings/{$this->mailingId}/sent.xml";
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }

    /**
     * @param string $promotionId
     * @return Mailing
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @param string $mailingId
     * @return Mailing
     */
    public function setMailingId($mailingId)
    {
        $this->mailingId = $mailingId;
        return $this;
    }

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