<?php
/**
 * abstract functionality only for members
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Members;

use MadMimi\Options\OptionsAbstract;

/**
 * Class MemberOptionsAbstract
 * @package MadMimi\Options\Members
 */
abstract class MemberOptionsAbstract extends OptionsAbstract
{
    /**
     * @param $key string the key
     * @param $bool boolean true or false
     * @return $this
     */
    protected function translateBooleanToInteger($key, $bool)
    {
        if (!is_bool($bool)) throw new \DomainException('Parameter of ' . debug_backtrace()[1]['function'] . ' must be a boolean');

        $this->$key = intval($bool);
        return $this;
    }
}