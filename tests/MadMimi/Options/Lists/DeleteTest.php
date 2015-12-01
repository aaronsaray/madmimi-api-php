<?php
/**
 * delete a list test
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Lists;

use MadMimi\Options\Lists\Delete;

/**
 * Class DeleteTest
 * @package MadMimi\Tests\Options\Lists
 */
class DeleteTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $options = new Delete();
        $this->assertInstanceOf('MadMimi\Options\Lists\Delete', $options->setName('my list name'));
        $this->assertAttributeEquals('my list name', 'name', $options);
    }

    public function testEndPoint()
    {
        $options = new Delete();
        $options->setName('my-list-to-delete');
        $this->assertEquals('/audience_lists/my-list-to-delete', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Delete();
        $this->assertEquals('delete', $options->getRequestType());
    }
}