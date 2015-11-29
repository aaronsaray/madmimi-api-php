<?php
/**
 * Tests the list all webforms class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Webforms;
use MadMimi\Options\Webforms\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Webforms
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/signups.json', $options->getEndPoint());
    }
}