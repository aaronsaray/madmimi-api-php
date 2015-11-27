<?php
/**
 * No Promotion Exception
 *
 * @author Aaron Saray
 */

namespace MadMimi\Exception;

/**
 * Class NoPromotionException
 *
 * This happens when you try to send to a promotion that does not exist
 * @see https://madmimi.com/developer/mailer/errors
 * @package MadMimi\Exception
 */
class NoPromotionException extends \Exception
{}