<?php
/**
 * Tests the list all members in a list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\AllByList;

/**
 * Class AllByListTest
 * @package MadMimi\Tests\Options\Members
 */
class AllByListTest extends \PHPUnit_Framework_TestCase
{
    // note: a lot of these methods are in the trait - tested by the AllTest class
    public function testSetListName()
    {
        $options = new AllByList();
        $this->assertInstanceOf('MadMimi\Options\Members\AllByList', $options->setListName('my list name'));
        $this->assertAttributeEquals('my list name', 'listName', $options);
    }

    public function testEndPoint()
    {
        $options = new AllByList();
        $options->setListName('a-list-here');
        $this->assertEquals("/audience_lists/a-list-here/members.xml", $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new AllByList();
        $this->assertEquals('get', $options->getRequestType());
    }
}