<?php
/**
 * Tests the list all social links
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\SocialLinks;
use MadMimi\Options\Addons\SocialLinks\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Addons\SocialLinks
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/social_links/available.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new All();
        $this->assertEquals('get', $options->getRequestType());
    }
}