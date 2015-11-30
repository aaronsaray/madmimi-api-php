<?php
/**
 * Tests whether the email is suppressed
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\IsSuppressed;

/**
 * Class IsSuppressedTest
 * @package MadMimi\Tests\Options\Members
 */
class IsSuppressedTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new IsSuppressed();
        $this->assertInstanceOf('MadMimi\Options\Members\IsSuppressed', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testEndPoint()
    {
        $options = new IsSuppressed();
        $options->setEmail('my-email');
        $this->assertEquals('/audience_members/my-email/is_suppressed', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new IsSuppressed();
        $this->assertEquals('get', $options->getRequestType());
    }
}