<?php
/**
 * Tests the read stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Read;

/**
 * Class ReadTest
 * @package MadMimi\Tests\Options\Stats
 */
class ReadTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Read();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/read.xml', $options->getEndPoint());
    }
}