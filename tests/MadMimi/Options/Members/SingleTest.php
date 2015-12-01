<?php
/**
 * Tests getting single member options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\Single;

/**
 * Class SingleTest
 * @package MadMimi\Tests\Options\Members
 */
class SingleTest extends \PHPUnit_Framework_TestCase
{
    public function testSetIncludeSuppressedMembers()
    {
        $options = new Single();
        $this->assertInstanceOf('MadMimi\Options\Members\Single', $options->setIncludeSuppressedMembers());
        $this->assertAttributeEquals(1, 'raw', $options);
    }

    public function testSetEmail()
    {
        $options = new Single();
        $this->assertInstanceOf('MadMimi\Options\Members\Single', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testEndPoint()
    {
        $options = new Single();
        $this->assertEquals('/audience_members/search.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Single();
        $this->assertEquals('get', $options->getRequestType());
    }
}