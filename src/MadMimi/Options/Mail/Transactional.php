<?php
/**
 * Transactional Mailer Method Options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Mail;

/**
 * Class Transactional
 *
 * @see https://madmimi.com/developer/mailer/transactional
 * @package MadMimi\Options
 */
class Transactional extends OptionsAbstract
{
    use PromotionBaseTrait;

    /**
     * @var string the Recipient of the email in format of "name <email>"
     */
    protected $recipients;

    /**
     * @var string cc email address
     */
    protected $cc;

    /**
     * @var string bcc email address
     */
    protected $bcc;

    /**
     * @var string the sender email in format of "name <email>" (used for Mail headers)
     */
    protected $sender;

    /**
     * @var string a boolean representation
     */
    protected $check_suppressed;

    /**
     * @var string a boolean representation
     */
    protected $skip_placeholders;

    /**
     * @var string a csv list of mailing lists to add to
     */
    protected $list_names;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/mailer';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

    /**
     * Sets the to address with optional name
     * @param $email
     * @param string $name
     * @return $this
     */
    public function setTo($email, $name = '')
    {
        return $this->setEmailAddress('recipients', $email, $name);
    }

    /**
     * Sets the cc address, does not accept a name
     * @param $email
     * @return $this
     */
    public function setCc($email)
    {
        return $this->setEmailAddress('cc', $email);
    }

    /**
     * Sets the bcc address, does not accept a name
     * @param $email
     * @return $this
     */
    public function setBcc($email)
    {
        return $this->setEmailAddress('bcc', $email);
    }

    /**
     * Sets the sender address with optional name (you probably want to use self::setFrom())
     *
     * Used for the Sender header in the email
     * @param $email
     * @param string $name
     * @return $this
     */
    public function setSender($email, $name = '')
    {
        return $this->setEmailAddress('sender', $email, $name);
    }

    /**
     * Check suppressed
     *
     * @param bool|true $bool
     * @return $this
     */
    public function setCheckSuppressed($bool = true)
    {
        return $this->setTranslatedBooleanValue('check_suppressed', $bool);
    }

    /**
     * sets whether to ignore the {placeholders}
     *
     * @param bool|true $bool
     * @return $this
     */
    public function setSkipPlaceholders($bool = true)
    {
        return $this->setTranslatedBooleanValue('skip_placeholders', $bool);
    }

    /**
     * This sets the lists via their name that you want to add your recipient to
     *
     * This will take care of formatting it properly for the API
     * @param array $lists
     * @return $this
     */
    public function addRecipientToLists(array $lists)
    {
        return $this->setCsvValueFromArray('list_names', $lists);
    }
}