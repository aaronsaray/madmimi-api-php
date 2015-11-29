<?php
/**
 * Tests the toggle functionality
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons;
use MadMimi\Options\Addons\Toggle;

/**
 * Class ToggleTest
 * @package MadMimi\Tests\Options\Addons
 */
class ToggleTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAddonKey()
    {
        $options = new Toggle();
        $this->assertInstanceOf('MadMimi\Options\Addons\Toggle', $options->setAddonKey('addon-key'));
        $this->assertAttributeEquals('addon-key', 'key', $options);
    }

    public function testEndPoint()
    {
        $options = new Toggle();
        $options->setAddonKey('addon-key');
        $this->assertEquals('/addons/addon-key/toggle', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Toggle();
        $this->assertEquals('post', $options->getRequestType());
    }
}