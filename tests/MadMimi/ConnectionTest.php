<?php
/**
 * Tests for the connection object
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests;
use MadMimi\Options\Transactional;

/**
 * Class ConnectionTest
 * @package MadMimi\Tests
 */
class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetsVariables()
    {
        $connection = new \MadMimi\Connection('test@email.com', 'api-key-sir');
        $this->assertAttributeEquals('test@email.com', 'username', $connection);
        $this->assertAttributeEquals('api-key-sir', 'apiKey', $connection);
    }

    public function testTransactionalMethodPassesProperties()
    {
        $connection = $this->getMockBuilder('\MadMimi\Connection')->setMethods(['send'])->disableOriginalConstructor()->getMock();
        $connection->expects($this->any())->method('send')->will($this->returnCallback(function($param) {
            return func_get_args();
        }));

        $params = $connection->transactional(new Transactional());
        $this->assertEquals('/mailer', $params[0]);
        $this->assertEquals('post', $params[1]);
        $this->assertInstanceOf('MadMimi\Options\Transactional', $params[2]);
    }
}