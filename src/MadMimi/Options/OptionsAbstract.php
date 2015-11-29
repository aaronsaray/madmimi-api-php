<?php
/**
 * The Abstract Options class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;

use MadMimi\Exception\InvalidOptionException;

/**
 * Class OptionsAbstract
 * @package MadMimi\Options
 */
abstract class OptionsAbstract
{
    /**
     * @var string this is a post method
     */
    const REQUEST_TYPE_POST = 'post';

    /**
     * @var string this is a get method
     */
    const REQUEST_TYPE_GET = 'get';

    /**
     * @var string this is the put method
     */
    const REQUEST_TYPE_PUT = 'put';

    /**
     * OptionsAbstract constructor.
     *
     * You can pass in the properties here directly - if you know what they are exactly.  It might be easier though
     * to use the setters on the actual options classes
     *
     * @param array $options
     * @throws InvalidOptionException
     */
    public function __construct(array $options = [])
    {
        foreach ($options as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
            else {
                throw new InvalidOptionException($key . ' is not defined.');
            }
        }
    }

    /**
     * @return array the populated array of elements from this set of options
     */
    public function getPopulated()
    {
        $properties = array_reduce(array_keys(get_class_vars(get_class($this))), function($holder, $currentKey) {
            if (!is_null($this->$currentKey)) $holder[$currentKey] = $this->$currentKey;
            return $holder;
        }, []);
        return $properties;
    }

    /**
     * @return string
     */
    abstract public function getEndPoint();

    /**
     * @return string
     */
    abstract public function getRequestType();
}