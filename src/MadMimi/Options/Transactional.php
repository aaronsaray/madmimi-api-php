<?php
/**
 * Transactional Mailer Method Options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;

/**
 * Class Transactional
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

}