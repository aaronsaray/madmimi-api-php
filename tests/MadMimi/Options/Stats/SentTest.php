<?php
/**
 * Tests the sent stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Sent;

/**
 * Class SentTest
 * @package MadMimi\Tests\Options\Stats
 */
class SentTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Sent();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/sent.xml', $options->getEndPoint());
    }
}