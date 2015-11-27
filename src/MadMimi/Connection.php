<?php
/**
 * This file holds the main MadMimi Api connection class.
 *
 * @author Aaron Saray
 */

namespace MadMimi;
use MadMimi\Exception\AuthenticationException;
use MadMimi\Exception\NoPromotionException;
use MadMimi\Exception\TransferErrorException;
use MadMimi\Options\Transactional as TransactionalOptions;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Connection
 * @package MadMimi
 */
class Connection
{
    /**
     * @var string the mad mimi api
     */
    const API_URL = 'https://api.madmimi.com';

    /**
     * @var string the api authentication has failed
     */
    const API_AUTHENTICATION_FAILED = "Authentication failed";

    /**
     * @var string this is a post method
     */
    const REQUEST_TYPE_POST = 'post';

    /**
     * @var string this is a get method
     */
    const REQUEST_TYPE_GET = 'get';

    /**
     * @var string the username (your email) used for the connection
     */
    protected $username;

    /**
     * @var string the api key for the connection
     */
    protected $apiKey;

    /**
     * Connection constructor - sets up the potential for hte connection
     * @param $username string The email that is used to connect
     * @param $apiKey string the API key that is used
     */
    public function __construct($username, $apiKey)
    {
        $this->username = $username;
        $this->apiKey = $apiKey;
    }

    /**
     * @param TransactionalOptions $transactionalOptions
     * @return string the transaction ID
     */
    public function transactional(TransactionalOptions $transactionalOptions)
    {
        return $this->send('/mailer', self::REQUEST_TYPE_POST, $transactionalOptions);
    }

    /**
     * Sends the request
     *
     * @param $endPoint string the endpoint in url format
     * @param $requestType string either of the two REQUEST_TYPE constants
     * @param OptionsAbstract $options optiosn for this send
     * @throws AuthenticationException
     * @throws NoPromotionException
     * @throws TransferErrorException
     * @return string the unique ID that was sent back
     */
    protected function send($endPoint, $requestType, OptionsAbstract $options)
    {
        $query = http_build_query(array_merge([
            'username'  =>  $this->username,
            'api_key'   =>  $this->apiKey
        ], $options->getPopulated()));

        $url = self::API_URL . $endPoint;
        if ($requestType == self::REQUEST_TYPE_GET) {
            $url .= "?{$query}";
        }

        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_HEADER, 'Accept: application/json');
        if ($requestType == self::REQUEST_TYPE_POST) {
            curl_setopt($curlHandle, CURLOPT_POST, true);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $query);
        }

        $result = curl_exec($curlHandle);

        $this->handleSendError($curlHandle, $result);

        if (($httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE)) !== 200) {
            throw new TransferErrorException("HTTP Error Code of {$httpCode} was generated and not caught."); // really shouldn't ever happen if I do my job right
        }

        return $result; // the unique transaction ID
    }

    /**
     * This handles all the errors that this particular connection send could generate
     *
     * @param $curlHandle resource Curl Handle
     * @param $result string the result of this request
     * @throws AuthenticationException
     * @throws NoPromotionException
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
            throw new AuthenticationException("Authentication failed.");
        }

        /**
         * HTTP Error Codes
         */
        switch (curl_getinfo($curlHandle, CURLINFO_HTTP_CODE)) {
            case 404:
                throw new TransferErrorException("Either the endpoint or method resulted in a 404-not found.");
                break;

            case 500:
                if (curl_getinfo($curlHandle, CURLINFO_CONTENT_TYPE) == 'text/html; charset=utf-8') {
                    throw new TransferErrorException("An error 500 was generated and an HTML page was returned.");
                }
                else {
                    throw new TransferErrorException("500 error returned.");
                }
                break;

            case 409:
                throw new NoPromotionException($result, 409);
                break;
        }

    }
}