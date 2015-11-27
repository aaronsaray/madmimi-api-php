<?php
/**
 * Mailer Method Options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;

/**
 * Class Mailer
 * @package MadMimi\Options
 */
class Mailer extends OptionsAbstract
{
    /**
     * @var string the name of the promotion in mad mimi
     */
    protected $promotion_name;

    /**
     * @var string Subject of the email
     */
    protected $subject;
}