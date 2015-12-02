<?php
/**
 * add a member to a list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\AddToList;

/**
 * Class AddToListTest
 * @package MadMimi\Tests\Options\Members
 */
class AddToListTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new AddToList();
        $this->assertInstanceOf('MadMimi\Options\Members\AddToList', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testSetListName()
    {
        $options = new AddToList();
        $this->assertInstanceOf('MadMimi\Options\Members\AddToList', $options->setListName('list name'));
        $this->assertAttributeEquals('list name', 'listName', $options);
    }

    public function testEndPoint()
    {
        $options = new AddToList();
        $options->setListName('list-name');
        $this->assertEquals('/audience_lists/list-name/add', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new AddToList();
        $this->assertEquals('post', $options->getRequestType());
    }
}