<?php
/**
 * Tests searching member
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\Search;

/**
 * Class SearchTest
 * @package MadMimi\Tests\Options\Members
 */
class SearchTest extends \PHPUnit_Framework_TestCase
{
    public function testSetIncludeSuppressedMembers()
    {
        $options = new Search();
        $this->assertInstanceOf('MadMimi\Options\Members\Search', $options->setIncludeSuppressedMembers());
        $this->assertAttributeEquals(1, 'raw', $options);
    }

    public function testSetQuery()
    {
        $options = new Search();
        $this->assertInstanceOf('MadMimi\Options\Members\Search', $options->setQuery('ayron'));
        $this->assertAttributeEquals('ayron', 'query', $options);
    }

    public function testEndPoint()
    {
        $options = new Search();
        $this->assertEquals('/audience_members/search.xml', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Search();
        $this->assertEquals('get', $options->getRequestType());
    }
}