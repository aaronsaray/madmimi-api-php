<?php
/**
 * Tests the list all child accounts
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\ChildAccounts;
use MadMimi\Options\Addons\ChildAccounts\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Addons\ChildAccounts
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/participants.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new All();
        $this->assertEquals('get', $options->getRequestType());
    }
}