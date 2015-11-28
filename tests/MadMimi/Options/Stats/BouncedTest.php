<?php
/**
 * Tests the bounced stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Bounced;

/**
 * Class BouncedTest
 * @package MadMimi\Tests\Options\Stats
 */
class BouncedTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Bounced();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/bounced.xml', $options->getEndPoint());
    }
}