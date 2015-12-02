<?php
/**
 * Remove member from a list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\RemoveFromList;

/**
 * Class RemoveFromListTest
 * @package MadMimi\Tests\Options\Members
 */
class RemoveFromListTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new RemoveFromList();
        $this->assertInstanceOf('MadMimi\Options\Members\RemoveFromList', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testSetListName()
    {
        $options = new RemoveFromList();
        $this->assertInstanceOf('MadMimi\Options\Members\RemoveFromList', $options->setListName('list name'));
        $this->assertAttributeEquals('list name', 'listName', $options);
    }

    public function testEndPoint()
    {
        $options = new RemoveFromList();
        $options->setListName('list-name');
        $this->assertEquals('/audience_lists/list-name/remove', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new RemoveFromList();
        $this->assertEquals('post', $options->getRequestType());
    }
}