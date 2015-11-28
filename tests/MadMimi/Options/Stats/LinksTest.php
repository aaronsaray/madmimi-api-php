<?php
/**
 * Tests the links stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Links;

/**
 * Class LinksTest
 * @package MadMimi\Tests\Options\Stats
 */
class LinksTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Links();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/clicked.xml', $options->getEndPoint());
    }
}