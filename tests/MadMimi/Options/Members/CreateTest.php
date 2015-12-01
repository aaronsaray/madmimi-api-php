<?php
/**
 * Creates a member
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\Create;

/**
 * Class CreateTest
 * @package MadMimi\Tests\Options\Members
 */
class CreateTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new Create();
        $this->assertInstanceOf('MadMimi\Options\Members\Create', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testSetName()
    {
        $options = new Create();
        $this->assertInstanceOf('MadMimi\Options\Members\Create', $options->setName('my name'));
        $this->assertAttributeEquals('my name', 'name', $options);
    }

    public function testEndPoint()
    {
        $options = new Create();
        $this->assertEquals('/audience_members', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Create();
        $this->assertEquals('post', $options->getRequestType());
    }
}