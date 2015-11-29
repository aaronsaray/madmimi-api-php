<?php
/**
 * Tests the list all user's social links class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\SocialLinks;
use MadMimi\Options\Addons\SocialLinks\User;

/**
 * Class UserTest
 * @package MadMimi\Tests\Options\Addons\SocialLinks
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new User();
        $this->assertEquals('/social_links.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new User();
        $this->assertEquals('get', $options->getRequestType());
    }
}