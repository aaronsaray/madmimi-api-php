<?php
/**
 * Tests for the connection object
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests;
use MadMimi\Connection;
use MadMimi\CurlRequest;

/**
 * Class ConnectionTest
 * @package MadMimi\Tests
 */
class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetsVariables()
    {
        $connection = new \MadMimi\Connection('test@email.com', 'api-key-sir', new CurlRequest());
        $this->assertAttributeEquals('test@email.com', 'username', $connection);
        $this->assertAttributeEquals('api-key-sir', 'apiKey', $connection);
        $this->assertAttributeEquals(false, 'debugMode', $connection);

        $connection = new Connection('test@email.com', 'api-key-sir', new CurlRequest(), Connection::ENABLE_DEBUG);
        $this->assertAttributeEquals(true, 'debugMode', $connection);
    }
}