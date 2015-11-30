<?php
/**
 * The Mail Abstract Options class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Mail;

use MadMimi\Options\OptionsAbstract;

/**
 * Class MailOptionsAbstract
 * @package MadMimi\Options\Mail
 */
abstract class MailOptionsAbstract extends OptionsAbstract
{
    /**
     * Helper function to set the string value of the email for MadMimi API
     *
     * @param $key string the key of the email
     * @param $email string the email
     * @param $name string the potential name
     * @return $this
     */
    protected function setEmailAddress($key, $email, $name = '')
    {
        $this->$key = $name ? trim("{$name} <{$email}>") : $email;
        return $this;
    }

    /**
     * Helper function to translate boolean values into what the API uses
     *
     * @param $key string the key of the option
     * @param $bool boolean true or false for this option
     * @return $this
     */
    protected function setTranslatedBooleanToString($key, $bool)
    {
        if (!is_bool($bool)) throw new \DomainException('Parameter of ' . debug_backtrace()[1]['function'] . ' must be a boolean');

        $this->$key = $bool ? 'yes' : 'no';
        return $this;
    }
}