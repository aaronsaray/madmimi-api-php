<?php
/**
 * Tests the permissions to a list for a child account options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\ChildAccounts;
use MadMimi\Options\Addons\ChildAccounts\Permissions;

/**
 * Class PermissionsTest
 * @package MadMimi\Tests\Options\Addons\ChildAccounts
 */
class PermissionsTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new Permissions();
        $this->assertInstanceOf('MadMimi\Options\Addons\ChildAccounts\Permissions', $options->setEmail('email@domain.com'));
        $this->assertAttributeEquals('email@domain.com', 'email', $options);
    }

    public function testFullPermissions()
    {
        $options = new Permissions();
        $this->assertInstanceOf('\MadMimi\Options\Addons\ChildAccounts\Permissions', $options->setListsToFullPermission(['my list', "Aaron's List", '"another" list']));
        $this->assertAttributeEquals('"my list","Aaron\'s List","""another"" list"', 'full', $options);
    }

    public function testReadPermissions()
    {
        $options = new Permissions();
        $this->assertInstanceOf('\MadMimi\Options\Addons\ChildAccounts\Permissions', $options->setListsToReadPermission(['my list', "Aaron's List", '"another" list']));
        $this->assertAttributeEquals('"my list","Aaron\'s List","""another"" list"', 'read', $options);
    }

    public function testNoPermissions()
    {
        $options = new Permissions();
        $this->assertInstanceOf('\MadMimi\Options\Addons\ChildAccounts\Permissions', $options->setListsToNoPermission(['my list', "Aaron's List", '"another" list']));
        $this->assertAttributeEquals('"my list","Aaron\'s List","""another"" list"', 'none', $options);
    }

    public function testEndPoint()
    {
        $options = new Permissions();
        $this->assertEquals('/participants/update_permissions_for', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Permissions();
        $this->assertEquals('post', $options->getRequestType());
    }
}