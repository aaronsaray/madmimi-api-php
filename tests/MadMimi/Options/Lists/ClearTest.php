<?php
/**
 * clear a list test
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Lists;

use MadMimi\Options\Lists\Clear;

/**
 * Class ClearTest
 * @package MadMimi\Tests\Options\Lists
 */
class ClearTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $options = new Clear();
        $this->assertInstanceOf('MadMimi\Options\Lists\Clear', $options->setName('my list name'));
        $this->assertAttributeEquals('my list name', 'name', $options);
    }

    public function testEndPoint()
    {
        $options = new Clear();
        $options->setName('my-list-to-clear');
        $this->assertEquals('/audience_lists/my-list-to-clear/clear', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Clear();
        $this->assertEquals('put', $options->getRequestType());
    }
}