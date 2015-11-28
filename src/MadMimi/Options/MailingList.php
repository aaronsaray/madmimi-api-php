<?php
/**
 * Send to a list options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;
use Symfony\Component\Yaml\Yaml;

/**
 * Class MailingList
 *
 * @see https://madmimi.com/developer/mailer/send-to-a-list
 * @package MadMimi\Options
 */
class MailingList extends OptionsAbstract
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
     * @var string the from email in format of "name <email>"
     */
    protected $from;

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
    protected $track_links;

    /**
     * @var string a boolean representation
     */
    protected $hidden;

    /**
     * @var string a csv list of mailing lists to add to
     */
    protected $list_names;

    /**
     * @var string a boolean representation
     */
    protected $prevent_resend;

    /**
     * @var string a csv list of merge data
     */
    protected $merge_data;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/mailer/to_list';
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
     * This sets the lists to send to
     *
     * This will take care of formatting it properly for the API
     * @param array $lists
     * @return $this
     */
    public function setLists(array $lists)
    {
        return $this->setCsvValueFromArray('list_names', $lists);
    }

    /**
     * Makes sure audience doesn't recieve this again if they've received it the first time
     *
     * @param bool|true $bool
     * @return $this
     */
    public function setPreventResend($bool = true)
    {
        return $this->setTranslatedBooleanValue('prevent_resend', $bool);
    }

    /**
     * Set the merge data
     *
     * This will take care of formatting it properly for the API
     *
     * @todo figure out how this actually works
     * @param array $mergeData
     * @return $this
     */
    public function setMergeData(array $mergeData)
    {
        return $this->setCsvValueFromArray('merge_data', $mergeData);
    }
}