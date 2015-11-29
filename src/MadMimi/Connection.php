<?php
/**
 * This file holds the main MadMimi Api connection class.
 *
 * @author Aaron Saray
 */

namespace MadMimi;
use MadMimi\Exception\AuthenticationException;
use MadMimi\Exception\InvalidOptionException;
use MadMimi\Exception\MissingPlaceholdersException;
use MadMimi\Exception\NoPromotionOrListException;
use MadMimi\Exception\TransferErrorException;
use MadMimi\Options\OptionsAbstract;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * Class Connection
 * @package MadMimi
 */
class Connection
{
    /**
     * @var boolean use this to indicate that you'd like debug mode on
     */
    const ENABLE_DEBUG = true;

    /**
     * @var string the mad mimi api
     */
    const API_URL = 'https://api.madmimi.com';

    /**
     * @var string the api authentication has failed
     */
    const API_AUTHENTICATION_FAILED = "Authentication failed";

    /**
     * @var string the username (your email) used for the connection
     */
    protected $username;

    /**
     * @var string the api key for the connection
     */
    protected $apiKey;

    /**
     * @var bool whether debugging logging should be on or not
     */
    protected $debugMode = false;

    /**
     * @var Logger
     */
    private $log;

    /**
     * Connection constructor - sets up the potential for hte connection
     * @param $username string The email that is used to connect
     * @param $apiKey string the API key that is used
     * @param $debugMode bool whether to turn on debugging
     */
    public function __construct($username, $apiKey, $debugMode = false)
    {
        $this->username = $username;
        $this->apiKey = $apiKey;

        $this->log = new Logger(__CLASS__);
        if ($this->debugMode = $debugMode) {
            $this->log->pushHandler(new StreamHandler('php://stdout'));
        }
    }

    /**
     * Sends the request
     *
     * @param OptionsAbstract $options options for this send
     * @throws AuthenticationException
     * @throws NoPromotionOrListException
     * @throws TransferErrorException
     * @return string the unique ID that was sent back
     */
    public function request(OptionsAbstract $options)
    {
        $endPoint = $options->getEndPoint();
        $requestType = $options->getRequestType();
        $this->debug("About to send to {$endPoint} via {$requestType} with options of " . get_class($options));

        $query = http_build_query(array_merge([
            'username'  =>  $this->username,
            'api_key'   =>  $this->apiKey
        ], $options->getPopulated()));
        $this->debug("Query: {$query}");

        $url = self::API_URL . $endPoint;
        if ($requestType == OptionsAbstract::REQUEST_TYPE_GET) {
            $url .= "?{$query}";
        }
        $this->debug("Url: {$url}");

        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        // @todo is this ever actually a thing?  It seems like just strings:  curl_setopt($curlHandle, CURLOPT_HEADER, 'Accept: application/json');
        if ($requestType == OptionsAbstract::REQUEST_TYPE_POST) {
            curl_setopt($curlHandle, CURLOPT_POST, true);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $query);
        }

        $result = curl_exec($curlHandle);
        $this->debug("Curl info after call: " . print_r(curl_getinfo($curlHandle), true));

        $this->handleSendError($curlHandle, $result);

        if (($httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE)) !== 200) {
            throw new TransferErrorException("HTTP Error Code of {$httpCode} was generated and not caught: " . $result); // really shouldn't ever happen if I do my job right
        }

        $this->debug('Successful call with result: ' . $result);
        return $result;
    }

    /**
     * This handles all the errors that this particular connection send could generate
     *
     * @param $curlHandle resource Curl Handle
     * @param $result string the result of this request
     * @throws AuthenticationException
     * @throws MissingPlaceholdersException
     * @throws NoPromotionOrListException
     * @throws TransferErrorException
     */
    protected function handleSendError($curlHandle, $result)
    {
        /**
         * Curl error
         */
        if ($result === false) {
            throw new TransferErrorException(curl_error($curlHandle), curl_errno($curlHandle));
        }

        /**
         * Authentication failure
         */
        if ($result == self::API_AUTHENTICATION_FAILED) {
            throw new AuthenticationException("Authentication failed: " . $result);
        }

        /**
         * HTTP Error Codes
         */
        switch (curl_getinfo($curlHandle, CURLINFO_HTTP_CODE)) {
            case 404:
                throw new TransferErrorException("Either the endpoint or method resulted in a 404-not found: {$result}", 404);
                break;

            case 403:
                if (stripos($result, 'Your email has {placeholders} in it') === 0) {
                    throw new MissingPlaceholdersException($result, 403);
                }
                break;

            case 500:
                // @todo figure out if this actually works
                if (curl_getinfo($curlHandle, CURLINFO_CONTENT_TYPE) == 'text/html; charset=utf-8') {
                    throw new TransferErrorException("An error 500 was generated and an HTML page was returned.", 500);
                }
                else {
                    throw new TransferErrorException("500 error returned.", 500);
                }
                break;

            case 409:
                throw new NoPromotionOrListException($result, 409);
                break;

            case 400:
                switch (true) {
                    case ($result == 'argument out of range'):
                    case ($result == 'count_new calls are limited to data collected within the space of a month'):
                        throw new \OutOfBoundsException($result, 400);
                        break;

                    case (stripos($result, 'does not exist') !== false):
                        throw new TransferErrorException("An element was not found: {$result}", 404);
                        break;

                    case (stripos($result, "Couldn't find Signup with id=") !== false):
                        throw new TransferErrorException($result, 404);
                        break;

                }
                break;

            case 422:
                throw new InvalidOptionException($result, 422);
                break;
        }
    }

    /**
     * This is a shortcut to debugging with the log - tries to limit the calculations done if debug mode is false
     *
     * @param $string string the debug string
     */
    protected function debug($string)
    {
        if ($this->debugMode) $this->log->debug($string);
    }
}