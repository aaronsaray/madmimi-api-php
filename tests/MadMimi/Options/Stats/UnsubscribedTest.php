<?php
/**
 * Tests the unsubscribed stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Unsubscribed;

/**
 * Class UnsubscribedTest
 * @package MadMimi\Tests\Options\Stats
 */
class UnsubscribedTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Unsubscribed();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/opt_out.xml', $options->getEndPoint());
    }
}