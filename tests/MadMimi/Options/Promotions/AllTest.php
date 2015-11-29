<?php
/**
 * Tests the option for getting all promotions
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Promotions;

use MadMimi\Options\Promotions\All;

/**
 * Class AllTest
 * @package MadMimi\Tests\Options\Promotions
 */
class AllTest extends \PHPUnit_Framework_TestCase
{
    /**
     * This tests the pagination trait too
     */
    public function testSetPageNumber()
    {
        $options = new All();
        $this->assertInstanceOf('MadMimi\Options\Promotions\All', $options->setPage(5));
        $this->assertAttributeEquals(5, 'page', $options);
    }

    public function testGetRequestType()
    {
        $options = new All();
        $this->assertEquals('get', $options->getRequestType());
    }

    public function testEndPoint()
    {
        $options = new All();
        $this->assertEquals('/promotions.xml', $options->getEndPoint());
    }

}