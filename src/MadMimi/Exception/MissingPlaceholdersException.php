<?php
/**
 * Missing Placeholders in Email exception
 *
 * @author Aaron Saray
 */

namespace MadMimi\Exception;

/**
 * Class MissingPlaceholdersException
 *
 * This happens when you have placeholders in the body and you haven't filled them in.
 * @see https://madmimi.com/developer/mailer/errors
 * @package MadMimi\Exception
 */
class MissingPlaceholdersException extends \Exception
{}