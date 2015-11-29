<?php
/**
 * Tests the list all user's addons class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons;
use MadMimi\Options\Addons\User;

/**
 * Class UserTest
 * @package MadMimi\Tests\Options\Addons
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new User();
        $this->assertEquals('/addons.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new User();
        $this->assertEquals('get', $options->getRequestType());
    }
}