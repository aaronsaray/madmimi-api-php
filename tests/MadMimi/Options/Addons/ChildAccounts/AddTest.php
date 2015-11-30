<?php
/**
 * Tests the add a child account
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\ChildAccounts;
use MadMimi\Options\Addons\ChildAccounts\Add;

/**
 * Class AddTest
 * @package MadMimi\Tests\Options\Addons\ChildAccounts
 */
class AddTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Add', $options->setEmail('email@domain.com'));
        $this->assertAttributeEquals('email@domain.com', 'email', $options);
    }

    public function testSetPassword()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Add', $options->setPassword('complex password'));
        $this->assertAttributeEquals('complex password', 'pwd', $options);
    }

    public function testSetOrganization()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Add', $options->setOrganizationName('my organization'));
        $this->assertAttributeEquals('my organization', 'organization_name', $options);
    }

    public function testSetFirstName()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Add', $options->setFirstName('guy'));
        $this->assertAttributeEquals('guy', 'first_name', $options);
    }

    public function testSetLastName()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Add', $options->setLastName('Smiley'));
        $this->assertAttributeEquals('Smiley', 'last_name', $options);
    }

    public function testSetAddress()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Add', $options->setAddress('some value here'));
        $this->assertAttributeEquals('some value here', 'address', $options);
    }

    public function testEndPoint()
    {
        $options = new Add();
        $this->assertEquals('/participants/create', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Add();
        $this->assertEquals('post', $options->getRequestType());
    }
}