<?php
/**
 * Rename a list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Lists;

use MadMimi\Options\Lists\Rename;

/**
 * Class RenameTest
 * @package MadMimi\Tests\Options\Lists
 */
class RenameTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $options = new Rename();
        $this->assertInstanceOf('MadMimi\Options\Lists\Rename', $options->setName('my list name'));
        $this->assertAttributeEquals('my list name', 'currentName', $options);
    }

    public function testSetNewName()
    {
        $options = new Rename();
        $this->assertInstanceOf('MadMimi\Options\Lists\Rename', $options->setNewName('my new list name'));
        $this->assertAttributeEquals('my new list name', 'name', $options);
    }

    public function testEndPoint()
    {
        $options = new Rename();
        $options->setName('current-name');
        $this->assertEquals('/audience_lists/current-name/rename', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Rename();
        $this->assertEquals('post', $options->getRequestType());
    }
}