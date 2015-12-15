<?php
/**
 * Curl Request Object
 *
 * Useful for testing
 *
 * @author Aaron Saray
 */

namespace MadMimi;

/**
 * Class CurlRequest
 * @package MadMimi
 */
class CurlRequest
{
    /**
     * @var Resource
     */
    protected $handle;

    /**
     * Execute the request
     * @return bool|string
     */
    public function execute()
    {
        $this->initHandle();
        return curl_exec($this->handle);
    }

    /**
     * Set curl option
     *
     * @param $name
     * @param $value
     * @return $this
     */
    public function setOption($name, $value)
    {
        $this->initHandle();
        curl_setopt($this->handle, $name, $value);
        return $this;
    }

    /**
     * Get curl info
     * @param $name
     * @return mixed
     */
    public function getInfo($name = null)
    {
        $this->initHandle();
        return curl_getinfo($this->handle, $name);
    }

    /**
     * Close handle
     * @return $this
     */
    public function close()
    {
        if (!is_null($this->handle)) curl_close($this->handle);
        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        $this->initHandle();
        return curl_error($this->handle);
    }

    /**
     * @return int
     */
    public function getErrorNumber()
    {
        $this->initHandle();
        return curl_errno($this->handle);
    }

    /**
     * Lazy loading curl handle
     */
    protected function initHandle()
    {
        if (is_null($this->handle)) $this->handle = curl_init();
    }
}