<?php
/**
 * List all lists
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Lists;

use MadMimi\Options\Lists\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Lists
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/audience_lists/lists.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new All();
        $this->assertEquals('get', $options->getRequestType());
    }
}