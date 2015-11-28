<?php
/**
 * Tests the transactional status class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;

use MadMimi\Options\Stats\Transactional;

/**
 * Class TransactionalTest
 * @package MadMimi\Tests\Options\Stats
 */
class TransactionalTest extends \PHPUnit_Framework_TestCase
{
    public function testSetTransactionId()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Stats\Transactional', $options->setTransactionId('s-123'));
        $this->assertAttributeEquals('s-123', 'transactionId', $options);
    }

    public function testEndPoint()
    {
        $options = new Transactional();
        $this->assertEquals('/mailers/status/', $options->getEndPoint());
        $options->setTransactionId('something-here');
        $this->assertEquals('/mailers/status/something-here', $options->getEndPoint());
    }

    public function testRequestType()
    {
        $options = new Transactional();
        $this->assertEquals('get', $options->getRequestType());
    }

}