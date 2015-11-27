<?php
/**
 * Tests for the connection object
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests;

/**
 * Class Connection
 * @package MadMimi\Tests
 */
class Connection extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetsVariables()
    {
        $connection = new \MadMimi\Connection('test@email.com', 'api-key-sir');
        $this->assertAttributeEquals('test@email.com', 'username', $connection);
        $this->assertAttributeEquals('api-key-sir', 'apiKey', $connection);
    }
}