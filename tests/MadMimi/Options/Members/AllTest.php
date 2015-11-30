<?php
/**
 * Tests the list all members class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Members
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testSetOrder()
    {
        $options = new All();
        $this->assertInstanceOf('MadMimi\Options\Members\All', $options->setOrder('first_name'));
        $this->assertAttributeEquals('first_name', 'order', $options);
    }

    /**
     * This actually tests the boolean translation
     */
    public function testSetBooleanThrowsException()
    {
        $this->setExpectedException('\DomainException', 'Parameter of setIncludeSuppressedMembers must be a boolean');
        $options = new All();
        $options->setIncludeSuppressedMembers('abc');
    }

    /**
     * This also tests converting to a boolean value
     */
    public function testSetIncludeSuppressedMembers()
    {
        $options = new All();
        $this->assertAttributeEquals(null, 'raw', $options);
        $this->assertInstanceOf('MadMimi\Options\Members\All', $options->setIncludeSuppressedMembers());
        $this->assertAttributeEquals(1, 'raw', $options);
        $options->setIncludeSuppressedMembers(false);
        $this->assertAttributeEquals(0, 'raw', $options);
    }

    public function testSetSuppressedMembersOnly()
    {
        $options = new All();
        $this->assertInstanceOf('MadMimi\Options\Members\All', $options->setSuppressedMembersOnly());
        $this->assertAttributeEquals(1, 'suppressed_only', $options);
    }

    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/audience_members.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new All();
        $this->assertEquals('get', $options->getRequestType());
    }
}