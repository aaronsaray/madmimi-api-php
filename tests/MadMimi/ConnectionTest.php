<?php
/**
 * Tests for the connection object
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests;
use MadMimi\Connection;
use MadMimi\CurlRequest;
use MadMimi\Options\Lists\Add;
use MadMimi\Options\Promotions\Search;

/**
 * Class ConnectionTest
 * @package MadMimi\Tests
 */
class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetsVariables()
    {
        $connection = new Connection('test@email.com', 'api-key-sir', new CurlRequest());
        $this->assertAttributeEquals('test@email.com', 'username', $connection);
        $this->assertAttributeEquals('api-key-sir', 'apiKey', $connection);
        $this->assertAttributeEquals(false, 'debugMode', $connection);

        $connection = new Connection('test@email.com', 'api-key-sir', new CurlRequest(), Connection::ENABLE_DEBUG);
        $this->assertAttributeEquals(true, 'debugMode', $connection);
    }

    public function testGetUrlCreated()
    {
        $curlRequestMock = $this->getMock('MadMimi\CurlRequest');
        $curlRequestMock->method('getInfo')->willReturn(200);

        $connectionMock = $this->getMockBuilder('MadMimi\Connection')
            ->setMethods(['debug'])->setConstructorArgs(['test@email.com', 'api-key-sir', $curlRequestMock])
            ->getMock();
        $connectionMock->expects($spy = $this->any())->method('debug');

        $options = new Search();
        $options->setName('the-name')->setToDate(new \DateTime('10/12/2015'));
        $connectionMock->request($options);

        $invocations = $spy->getInvocations();
        $this->assertCount(6, $invocations);

        $this->assertEquals('Url: https://api.madmimi.com/promotions/search.xml?username=test%40email.com&api_key=api-key-sir&name=the-name&to_date=2015-10-12+00%3A00%3A00&date=1', $invocations[2]->parameters[0]);
    }

    public function testPostUrlCreated()
    {
        $curlRequestMock = $this->getMock('MadMimi\CurlRequest');
        $curlRequestMock->method('getInfo')->willReturn(200);

        $connectionMock = $this->getMockBuilder('MadMimi\Connection')
            ->setMethods(['debug'])->setConstructorArgs(['test@email.com', 'api-key-sir', $curlRequestMock])
            ->getMock();
        $connectionMock->expects($spy = $this->any())->method('debug');

        $options = new Add();
        $options->setName('the-list-name');
        $connectionMock->request($options);

        $invocations = $spy->getInvocations();

        $this->assertEquals('Url: https://api.madmimi.com/audience_lists', $invocations[2]->parameters[0]);
    }

    public function testNon200ThrowsExpectation()
    {
        $this->setExpectedException('MadMimi\Exception\TransferErrorException', 'HTTP Error Code of 410 was generated and not caught:');
        $curlRequestMock = $this->getMock('MadMimi\CurlRequest');
        $curlRequestMock->method('getInfo')->willReturn(410);

        $connection = new Connection('me@me.com', 'asdf', $curlRequestMock);

        $options = new Add();
        $connection->request($options);
    }
}