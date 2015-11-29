<?php
/**
 * Tests the list all drip campaigns option
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons;
use MadMimi\Options\Addons\Drip;

/**
 * Class DripTest
 * @package MadMimi\Tests\Options\Addons
 */
class DripTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Drip();
        $this->assertEquals('/drip_campaigns/list.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Drip();
        $this->assertEquals('get', $options->getRequestType());
    }
}