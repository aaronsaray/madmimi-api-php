<?php
/**
 * Creates a list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Lists;

use MadMimi\Options\Lists\Add;

/**
 * Class AddTest
 * @package MadMimi\Tests\Options\Lists
 */
class AddTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Lists\Add', $options->setName('my list name'));
        $this->assertAttributeEquals('my list name', 'name', $options);
    }

    public function testEndPoint()
    {
        $options = new Add();
        $this->assertEquals('/audience_lists', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Add();
        $this->assertEquals('post', $options->getRequestType());
    }
}