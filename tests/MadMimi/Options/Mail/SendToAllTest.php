<?php
/**
 * Tests the methods of the send to all option
 * 
 * @see TransactionalTest for abstract tests
 * @see MailingListTest for majority of the tests
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Mail;

use MadMimi\Options\Mail\SendToAll;

/**
 * Class SendToAllTest
 * @package MadMimi\Tests\Options
 */
class SendToAllTest extends \PHPUnit_Framework_TestCase
{
    public function testSetListsFails()
    {
        $this->setExpectedException('\DomainException', 'This method (MadMimi\Options\Mail\SendToAll::setLists) is not implemented in this class.');
        $options = new SendToAll();
        $options->setLists([]);
    }

    public function testSetMergeDataFails()
    {
        $this->setExpectedException('\DomainException', 'This method (MadMimi\Options\Mail\SendToAll::setMergeData) is not implemented in this class.');
        $options = new SendToAll();
        $options->setMergeData([]);
    }

    public function testEndPoint()
    {
        $options = new SendToAll();
        $this->assertEquals('/mailer/to_all', $options->getEndPoint());
    }

    public function testRequestType()
    {
        $options = new SendToAll();
        $this->assertEquals('post', $options->getRequestType());
    }

}