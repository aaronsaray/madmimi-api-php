<?php
/**
 * Tests the options for retrieving events since a date
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\EventsSince;

/**
 * Class EventsSinceTest
 * @package MadMimi\Tests\Options\Members
 */
class EventsSinceTest extends \PHPUnit_Framework_TestCase
{
    public function testFromDate()
    {
        $options = new EventsSince();
        $this->assertInstanceOf('MadMimi\Options\Members\EventsSince', $options->setFromDate(new \DateTime('2015-01-01 01:01:01')));
        $this->assertAttributeEquals(1420095661, 'timestamp', $options);
    }

    public function testSetEmail()
    {
        $options = new EventsSince();
        $this->assertInstanceOf('MadMimi\Options\Members\EventsSince', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testSetActionType()
    {
        $options = new EventsSince();
        $this->assertInstanceOf('MadMimi\Options\Members\EventsSince', $options->setActionType('my action'));
        $this->assertAttributeEquals('my action', 'action_type', $options);
    }

    public function testSetListName()
    {
        $options = new EventsSince();
        $this->assertInstanceOf('MadMimi\Options\Members\EventsSince', $options->setListName('the list name'));
        $this->assertAttributeEquals('the list name', 'list_name', $options);
    }

    public function testEndPoint()
    {
        $options = new EventsSince();
        $options->setFromDate(new \DateTime('2015-01-03 01:01:01'));
        $this->assertEquals('/audience_members/events_since/1420268461.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new EventsSince();
        $this->assertEquals('get', $options->getRequestType());
    }
}