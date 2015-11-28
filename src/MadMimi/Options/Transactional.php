<?php
/**
 * Transactional Mailer Method Options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;
use Symfony\Component\Yaml\Yaml;

/**
 * Class Transactional
 *
 * @see https://madmimi.com/developer/mailer/transactional
 * @package MadMimi\Options
 */
class Transactional extends OptionsAbstract
{
    /**
     * @var string the name of the promotion in MadMimi
     */
    protected $promotion_name;

    /**
     * @var string Subject of the email
     */
    protected $subject;

    /**
     * @var string the Recipient of the email in format of "name <email>"
     */
    protected $recipients;

    /**
     * @var string the from email in format of "name <email>"
     */
    protected $from;

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
     * @var string raw HTML to send with this transactional email
     */
    protected $raw_html;

    /**
     * @var string raw plain text to send with this email
     */
    protected $raw_plain_text;

    /**
     * @var string the YAML for replacing placeholders
     */
    protected $body;

    /**
     * @var string a boolean representation
     */
    protected $check_suppressed;

    /**
     * @var string a boolean representation
     */
    protected $track_links;

    /**
     * @var string a boolean representation
     */
    protected $hidden;

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
     * @param string $promotionName
     * @return $this
     */
    public function setPromotionName($promotionName)
    {
        $this->promotion_name = $promotionName;
        return $this;
    }

    /**
     * @param string $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
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
     * Sets the from address with optional name
     * @param $email
     * @param string $name
     * @return $this
     */
    public function setFrom($email, $name = '')
    {
        return $this->setEmailAddress('from', $email, $name);
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
     * Use this to set placeholders - generates a YAML and will overwrite your old values
     *
     * @param array $placeholders by key => value of placeholder => replacement
     * @return $this
     */
    public function setPlaceholderValues(array $placeholders)
    {
        $this->body = Yaml::dump($placeholders);
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
     * Track links
     *
     * @param bool|true $bool
     * @return $this
     */
    public function setTrackLinks($bool = true)
    {
        return $this->setTranslatedBooleanValue('track_links', $bool);
    }

    /**
     * Hides the promotion from the web interface
     *
     * @param bool|true $bool
     * @return $this
     */
    public function setHidden($bool = true)
    {
        return $this->setTranslatedBooleanValue('hidden', $bool);
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