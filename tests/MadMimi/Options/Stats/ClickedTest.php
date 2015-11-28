<?php
/**
 * Tests the clicked stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Clicked;

/**
 * Class ClickedTest
 * @package MadMimi\Tests\Options\Stats
 */
class ClickedTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Clicked();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/clicked_thru.xml', $options->getEndPoint());
    }
}