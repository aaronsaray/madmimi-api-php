<?php
/**
 * Tests importing members option
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\Import;

/**
 * Class ImportTest
 * @package MadMimi\Tests\Options\Members
 */
class ImportTest extends \PHPUnit_Framework_TestCase
{
    public function testSetCsvFileData()
    {
        $options = new Import();
        $this->assertInstanceOf('MadMimi\Options\Members\Import', $options->setCsvFileData('some data'));
        $this->assertAttributeEquals('some data', 'csv_file', $options);
    }

    public function testSetListName()
    {
        $options = new Import();
        $this->assertInstanceOf('MadMimi\Options\Members\Import', $options->setListName('my list name'));
        $this->assertAttributeEquals('my list name', 'audience_list', $options);
    }

    public function testEndPoint()
    {
        $options = new Import();
        $this->assertEquals('/audience_members', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Import();
        $this->assertEquals('post', $options->getRequestType());
    }
}