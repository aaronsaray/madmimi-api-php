<?php
/**
 * Tests the option for getting a single promotion
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Promotions;

use MadMimi\Options\Promotions\Single;

/**
 * Class SingleTest
 * @package MadMimi\Tests\Options\Promotions
 */
class SingleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * This tests the pagination trait too
     */
    public function testSetPromotionId()
    {
        $options = new Single();
        $this->assertInstanceOf('MadMimi\Options\Promotions\Single', $options->setPromotionId(50101));
        $this->assertAttributeEquals(50101, 'id', $options);
    }

    public function testGetRequestType()
    {
        $options = new Single();
        $this->assertEquals('get', $options->getRequestType());
    }

    public function testEndPoint()
    {
        $options = new Single();
        $this->assertEquals('/promotions/search.xml', $options->getEndPoint());
    }

}