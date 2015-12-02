<?php
/**
 * Tests for the connection object
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests;
use MadMimi\Connection;

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
        $this->assertAttributeEquals(false, 'debug', $connection);

        $connection = new Connection('test@email.com', 'api-key-sir', Connection::ENABLE_DEBUG);
        $this->assertAttributeEquals(true, 'debug', $connection);
    }
}