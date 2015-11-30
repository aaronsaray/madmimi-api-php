<?php
/**
 * Tests suppressing an email
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\Suppress;

/**
 * Class SuppressTest
 * @package MadMimi\Tests\Options\Members
 */
class SuppressTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new Suppress();
        $this->assertInstanceOf('MadMimi\Options\Members\Suppress', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testEndPoint()
    {
        $options = new Suppress();
        $options->setEmail('my-email-address');
        $this->assertEquals('/audience_members/my-email-address/suppress_email', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Suppress();
        $this->assertEquals('post', $options->getRequestType());
    }
}