<?php
/**
 * Tests the delete a ga domain
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\GoogleAnalytics;
use MadMimi\Options\Addons\GoogleAnalytics\Delete;

/**
 * Class DeleteTest
 * @package MadMimi\Tests\Options\Addons\GoogleAnalytics
 */
class DeleteTest extends \PHPUnit_Framework_TestCase
{
    public function testSetDomain()
    {
        $options = new Delete();
        $this->assertInstanceOf('MadMimi\Options\Addons\GoogleAnalytics\Delete', $options->setDomain('domain-here.com'));
        $this->assertAttributeEquals('domain-here.com', 'domain', $options);
    }

    public function testEndPoint()
    {
        $options = new Delete();
        $this->assertEquals('/google_analytics/delete', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Delete();
        $this->assertEquals('post', $options->getRequestType());
    }
}