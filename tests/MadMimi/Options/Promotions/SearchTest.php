<?php
/**
 * Tests the option for searching a promotion
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Promotions;

use MadMimi\Options\Promotions\Search;

/**
 * Class SearchTest
 * @package MadMimi\Tests\Options\Promotions
 */
class SearchTest extends \PHPUnit_Framework_TestCase
{
    public function testSetNamePart()
    {
        $options = new Search();
        $this->assertInstanceOf('MadMimi\Options\Promotions\Search', $options->setNamePart('name part'));
        $this->assertAttributeEquals('name part', 'query', $options);
    }

    public function testSetName()
    {
        $options = new Search();
        $this->assertInstanceOf('MadMimi\Options\Promotions\Search', $options->setName('full name test'));
        $this->assertAttributeEquals('full name test', 'name', $options);
    }

    public function testSetIncludeApiMailings()
    {
        $options = new Search();
        $this->assertInstanceOf('MadMimi\Options\Promotions\Search', $options->setIncludeApiMailings());
        $this->assertAttributeEquals(true, 'api_mailings', $options);
        $options->setIncludeApiMailings(false);
        $this->assertAttributeEquals(false, 'api_mailings', $options);
    }

    public function testSetFromDate()
    {
        $options = new Search();
        $this->assertAttributeEquals(null, 'date', $options);
        $this->assertInstanceOf('MadMimi\Options\Promotions\Search', $options->setFromDate(new \DateTime('2015-03-05 14:22:33')));
        $this->assertAttributeEquals('2015-03-05 14:22:33', 'from_date', $options);
        $this->assertAttributeEquals(1, 'date', $options);
    }

    public function testSetToDate()
    {
        $options = new Search();
        $this->assertAttributeEquals(null, 'date', $options);
        $this->assertInstanceOf('MadMimi\Options\Promotions\Search', $options->setToDate(new \DateTime('2013-05-03 3:00:59')));
        $this->assertAttributeEquals('2013-05-03 03:00:59', 'to_date', $options);
        $this->assertAttributeEquals(1, 'date', $options);
    }

    public function testGetRequestType()
    {
        $options = new Search();
        $this->assertEquals('get', $options->getRequestType());
    }

    public function testEndPoint()
    {
        $options = new Search();
        $this->assertEquals('/promotions/search.xml', $options->getEndPoint());
    }

}