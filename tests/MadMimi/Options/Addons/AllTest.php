<?php
/**
 * Tests the list all addons class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons;
use MadMimi\Options\Addons\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Addons
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/addons/available.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new All();
        $this->assertEquals('get', $options->getRequestType());
    }
}