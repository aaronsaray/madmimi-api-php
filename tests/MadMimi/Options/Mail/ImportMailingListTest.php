<?php
/**
 * Tests the methods of import mailing list
 * 
 * @see TransactionalTest for abstract tests
 * @see MailingListTest for majority of the tests
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Mail;

use MadMimi\Options\Mail\ImportMailingList;

/**
 * Class ImportMailingListTest
 * @package MadMimi\Tests\Options
 */
class ImportMailingListTest extends \PHPUnit_Framework_TestCase
{
    public function testSetCsvData()
    {
        $options = new ImportMailingList();
        $this->assertInstanceOf('\MadMimi\Options\Mail\ImportMailingList', $options->setCsvData('csv,data'));
        $this->assertAttributeEquals('csv,data', 'csv_file', $options);
    }

    public function testSetList()
    {
        $options = new ImportMailingList();
        $this->assertInstanceOf('\MadMimi\Options\Mail\ImportMailingList', $options->setList('new mailing list'));
        $this->assertAttributeEquals('new mailing list', 'audience_list', $options);
    }

    public function testSetListsFails()
    {
        $this->setExpectedException('\DomainException', 'This method (MadMimi\Options\Mail\ImportMailingList::setLists) is not implemented in this class.');
        $options = new ImportMailingList();
        $options->setLists([]);
    }

    public function testEndPoint()
    {
        $options = new ImportMailingList();
        $this->assertEquals('/mailer/to_imported_list', $options->getEndPoint());
    }

    public function testRequestType()
    {
        $options = new ImportMailingList();
        $this->assertEquals('post', $options->getRequestType());
    }
}