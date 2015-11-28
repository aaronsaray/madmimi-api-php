<?php
/**
 * Tests the forwarded stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Forwarded;

/**
 * Class ForwardedTest
 * @package MadMimi\Tests\Options\Stats
 */
class ForwardedTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Forwarded();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/forwarded.xml', $options->getEndPoint());
    }
}