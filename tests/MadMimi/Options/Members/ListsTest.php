<?php
/**
 * Tests getting members lists
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\Lists;

/**
 * Class ListsTest
 * @package MadMimi\Tests\Options\Members
 */
class ListsTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new Lists();
        $this->assertInstanceOf('MadMimi\Options\Members\Lists', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testEndPoint()
    {
        $options = new Lists();
        $options->setEmail('my-email');
        $this->assertEquals('/audience_members/my-email/lists.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Lists();
        $this->assertEquals('get', $options->getRequestType());
    }
}