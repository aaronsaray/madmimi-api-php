<?php
/**
 * Tests member import status
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\ImportStatus;

/**
 * Class ImportStatusTest
 * @package MadMimi\Tests\Options\Members
 */
class ImportStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testSetImportId()
    {
        $options = new ImportStatus();
        $this->assertInstanceOf('MadMimi\Options\Members\ImportStatus', $options->setImportId(12345));
        $this->assertAttributeEquals(12345, 'importId', $options);
    }

    public function testEndPoint()
    {
        $options = new ImportStatus();
        $options->setImportId(1001);
        $this->assertEquals('/audience_imports/1001/status', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new ImportStatus();
        $this->assertEquals('get', $options->getRequestType());
    }
}