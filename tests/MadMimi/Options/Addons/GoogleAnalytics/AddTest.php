<?php
/**
 * Tests the add a ga domain
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\GoogleAnalytics;
use MadMimi\Options\Addons\GoogleAnalytics\Add;

/**
 * Class AddTest
 * @package MadMimi\Tests\Options\Addons\GoogleAnalytics
 */
class AddTest extends \PHPUnit_Framework_TestCase
{
    public function testSetDomain()
    {
        $options = new Add();
        $this->assertInstanceOf('MadMimi\Options\Addons\GoogleAnalytics\Add', $options->setDomain('domain.com'));
        $this->assertAttributeEquals('domain.com', 'domain', $options);
    }

    public function testEndPoint()
    {
        $options = new Add();
        $this->assertEquals('/google_analytics/create', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Add();
        $this->assertEquals('post', $options->getRequestType());
    }
}