<?php
/**
 * Tests the option for deleting a single promotion
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Promotions;

use MadMimi\Options\Promotions\Delete;

/**
 * Class DeleteTest
 * @package MadMimi\Tests\Options\Promotions
 */
class DeleteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * This tests the pagination trait too
     */
    public function testSetPromotionId()
    {
        $options = new Delete();
        $this->assertInstanceOf('MadMimi\Options\Promotions\Delete', $options->setPromotionId(123457));
        $this->assertAttributeEquals(123457, 'id', $options);
    }

    public function testGetRequestType()
    {
        $options = new Delete();
        $this->assertEquals('put', $options->getRequestType());
    }

    public function testEndPoint()
    {
        $options = new Delete();
        $options->setPromotionId('my-promotion-id');
        $this->assertEquals('/promotions/my-promotion-id/trash', $options->getEndPoint());
    }
}