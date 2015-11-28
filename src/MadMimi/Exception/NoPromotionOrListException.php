<?php
/**
 * No Promotion or List Exception
 *
 * @author Aaron Saray
 */

namespace MadMimi\Exception;

/**
 * Class NoPromotionException
 *
 * This happens when you try to send to a promotion or list that does not exist
 * @see https://madmimi.com/developer/mailer/errors
 * @package MadMimi\Exception
 */
class NoPromotionOrListException extends \Exception
{}