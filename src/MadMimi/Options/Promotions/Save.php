<?php
/**
 * Save a promotion
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Promotions;

use MadMimi\Options\OptionsAbstract;

/**
 * Class Save
 * @package MadMimi\Options\Promotions
 */
class Save extends OptionsAbstract
{
    /**
     * @var string the exact name
     */
    protected $name;

    /**
     * @var string raw HTML to send with this transactional email
     */
    protected $raw_html;

    /**
     * @var string raw plain text to send with this email
     */
    protected $raw_plain_text;

    /**
     * @var string the url of the content
     */
    protected $url;

    /**
     * Set promotion name
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
     * Set plain HTML instead of using a prebuilt promotion value
     *
     * @param $html string the raw html to send
     * @return $this
     */
    public function setHTML($html)
    {
        $this->raw_html = $html;
        return $this;
    }

    /**
     * Set plain text content of promotion
     *
     * @param $text string the raw plain text to send
     * @return $this
     */
    public function setText($text)
    {
        $this->raw_plain_text = $text;
        return $this;
    }

    /**
     * The url of the content
     *
     * @param $url string
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string the endpoint
     */
    public function getEndPoint()
    {
        return '/promotions/save';
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}