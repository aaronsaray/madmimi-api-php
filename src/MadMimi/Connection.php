<?php
/**
 * This file holds the main MadMimi Api connection class.
 *
 * @author Aaron Saray
 */

namespace MadMimi;
use MadMimi\Exception\TransferErrorException;
use MadMimi\Options\Mailer as MailerOptions;
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
     * @param MailerOptions $mailerOptions
     */
    public function mailer(MailerOptions $mailerOptions)
    {
        $this->send('/mailer', self::REQUEST_TYPE_POST, $mailerOptions);
    }

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

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 'Accept: application/json');
        if ($requestType == self::REQUEST_TYPE_POST) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        }

        $result = curl_exec($ch);
        if ($result === false) {
            throw new TransferErrorException(curl_error($ch), curl_errno($ch));
        }
        if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == 404) {
            throw new TransferErrorException("Either the endpoint or method resulted in a 404-not found.");
        }


    }
}