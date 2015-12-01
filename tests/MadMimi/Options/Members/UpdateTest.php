<?php
/**
 * Tests updating the user
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\Update;

/**
 * Class UpdateTest
 * @package MadMimi\Tests\Options\Members
 */
class UpdateTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Members\Update', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testSetAttributes()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Members\Update', $options->setAttributes(['one'=>'two']));
        $this->assertAttributeEquals(['one'=>'two'], 'audience_member', $options);
    }

    public function testAddLists()
    {
        $options = new Update();
        $this->assertAttributeEquals(null, 'lists', $options);
        $this->assertInstanceOf('MadMimi\Options\Members\Update', $options->addToLists([1,2,3]));
        $this->assertAttributeEquals(['add'=>'1,2,3'], 'lists', $options);
    }

    public function testRemoveLists()
    {
        $options = new Update();
        $this->assertAttributeEquals(null, 'lists', $options);
        $this->assertInstanceOf('MadMimi\Options\Members\Update', $options->removeFromLists([32, 11]));
        $this->assertAttributeEquals(['remove'=>'32,11'], 'lists', $options);
    }

    public function testEndPoint()
    {
        $options = new Update();
        $options->setEmail('my-email');
        $this->assertEquals('/audience_members/my-email', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Update();
        $this->assertEquals('put', $options->getRequestType());
    }
}