<?php
/**
 * Tests the abused stats class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\Abused;

/**
 * Class AbusedTest
 * @package MadMimi\Tests\Options\Stats
 */
class AbusedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * This tests the pagination trait too
     */
    public function testSetPageNumber()
    {
        $options = new Abused();
        $this->assertInstanceOf('MadMimi\Options\Stats\Abused', $options->setPage(12));
        $this->assertAttributeEquals(12, 'page', $options);
    }

    /**
     * This tests the pagination trait too
     */
    public function testSetNumberPerPage()
    {
        $options = new Abused();
        $this->assertInstanceOf('MadMimi\Options\Stats\Abused', $options->setRecordsPerPage(50));
        $this->assertAttributeEquals(50, 'per_page', $options);
    }

    public function testEndPoint()
    {
        $options = new Abused();
        $options->setMailingId('mailing-id')
            ->setPromotionId('promo-id');
        $this->assertEquals('/promotions/promo-id/mailings/mailing-id/abused.xml', $options->getEndPoint());
    }
}