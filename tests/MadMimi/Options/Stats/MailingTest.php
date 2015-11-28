<?php
/**
 * Tests the mailing stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Mailing;

/**
 * Class MailingTest
 * @package MadMimi\Tests\Options\Stats
 */
class MailingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * This also tests the PromotionMailingBaseTrait
     */
    public function testSetPromotionId()
    {
        $options = new Mailing();
        $this->assertInstanceOf('\MadMimi\Options\Stats\Mailing', $options->setPromotionId('promo'));
        $this->assertAttributeEquals('promo', 'promotionId', $options);
    }

    /**
     * This also tests the PromotionMailingBaseTrait
     */
    public function testSetMailingId()
    {
        $options = new Mailing();
        $this->assertInstanceOf('\MadMimi\Options\Stats\Mailing', $options->setMailingId('mailing'));
        $this->assertAttributeEquals('mailing', 'mailingId', $options);
    }

    /**
     * This also tests the abstract
     */
    public function testRequestType()
    {
        $options = new Mailing();
        $this->assertEquals('get', $options->getRequestType());
    }

    public function testEndPoint()
    {
        $options = new Mailing();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id.xml', $options->getEndPoint());
    }
}