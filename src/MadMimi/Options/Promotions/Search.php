<?php
/**
 * Search Promotions
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Promotions;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Search
 * @package MadMimi\Options\Promotions
 */
class Search extends OptionsAbstract
{
    /**
     * @var string the name search
     */
    protected $query;

    /**
     * @var string the exact name
     */
    protected $name;

    /**
     * @var string a boolean representation
     */
    protected $api_mailings;

    /**
     * @var string in the format YYYY-MM-DD hh:mm:ss
     */
    protected $from_date;

    /**
     * @var string in the format YYYY-MM-DD hh:mm:ss
     */
    protected $to_date;

    /**
     * @var integer an indicator when set that we're doing a date search
     */
    protected $date;

    /**
     * Search by part of the promotion name
     *
     * @param $namePart string
     * @return $this
     */
    public function setNamePart($namePart)
    {
        $this->query = $namePart;
        return $this;
    }

    /**
     * Search by the exact name
     *
     * @param $name string
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set include the api generated mailings
     *
     * @note I'm not sure if this is working or not to be honest - this seems to be a different paradigm than on/off
     * @param bool|true $includeApiMailings
     * @return $this
     */
    public function setIncludeApiMailings($includeApiMailings = true)
    {
        $this->api_mailings = $includeApiMailings;
        return $this;
    }

    /**
     * Set the from date for a search
     *
     * @param \DateTime $fromDate
     * @return $this
     */
    public function setFromDate(\DateTime $fromDate)
    {
        $this->date = 1;
        $this->from_date = $fromDate->format('Y-m-d H:i:s');
        return $this;
    }

    /**
     * Set the to date for a search
     *
     * @param \DateTime $toDate
     * @return $this
     */
    public function setToDate(\DateTime $toDate)
    {
        $this->date = 1; // this may seem redundant but...
        $this->to_date = $toDate->format('Y-m-d H:i:s');
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return '/promotions/search.xml';
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_GET;
    }
}