<?php
/**
 * Tests the list all google analytics domains class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\GoogleAnalytics;
use MadMimi\Options\Addons\GoogleAnalytics\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Addons\GoogleAnalytics
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/google_analytics.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new All();
        $this->assertEquals('get', $options->getRequestType());
    }
}