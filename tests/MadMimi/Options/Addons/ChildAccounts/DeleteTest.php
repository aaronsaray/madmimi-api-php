<?php
/**
 * Tests the delete a child account options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\ChildAccounts;
use MadMimi\Options\Addons\ChildAccounts\Delete;

/**
 * Class DeleteTest
 * @package MadMimi\Tests\Options\Addons\ChildAccounts
 */
class DeleteTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new Delete();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Delete', $options->setEmail('email@domain.com'));
        $this->assertAttributeEquals('email@domain.com', 'email', $options);
    }

    public function testEndPoint()
    {
        $options = new Delete();
        $this->assertEquals('/participants/destroy', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Delete();
        $this->assertEquals('post', $options->getRequestType());
    }
}