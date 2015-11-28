<?php
/**
 * Tests the transactional count class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;

use MadMimi\Options\Stats\TransactionalCount;

/**
 * Class TransactionalCountTest
 * @package MadMimi\Tests\Options\Stats
 */
class TransactionalCountTest extends \PHPUnit_Framework_TestCase
{
    public function testSetPromotionName()
    {
        $options = new TransactionalCount();
        $this->assertInstanceOf('\MadMimi\Options\Stats\TransactionalCount', $options->setPromotionName('my promo'));
        $this->assertAttributeEquals('my promo', 'promotion_name', $options);
    }

    public function testSetDate()
    {
        $options = new TransactionalCount();
        $this->assertInstanceOf('\MadMimi\Options\Stats\TransactionalCount', $options->setDate(new \DateTime('2015-02-05')));
        $this->assertAttributeEquals('2015-02-05', 'date', $options);
    }

    public function testEndPoint()
    {
        $options = new TransactionalCount();
        $this->assertEquals('/promotions/transactional_count', $options->getEndPoint());
    }
}