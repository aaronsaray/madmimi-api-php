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
    public function testSetPromotionId()
    {
        $options = new Sent();
        $this->assertInstanceOf('\MadMimi\Options\Stats\Sent', $options->setPromotionId('promo'));
        $this->assertAttributeEquals('promo', 'promotionId', $options);
    }

    public function testSetMailingId()
    {
        $options = new Sent();
        $this->assertInstanceOf('\MadMimi\Options\Stats\Sent', $options->setMailingId('mailing'));
        $this->assertAttributeEquals('mailing', 'mailingId', $options);
    }

    public function testEndPoint()
    {
        $options = new Sent();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/sent.xml', $options->getEndPoint());
    }

    public function testRequestType()
    {
        $options = new Sent();
        $this->assertEquals('get', $options->getRequestType());
    }
}