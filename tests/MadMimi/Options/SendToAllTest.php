<?php
/**
 * Tests the methods of the send to all option
 * 
 * @see TransactionalTest for abstract tests
 * @see MailingListTest for majority of the tests
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options;

use MadMimi\Options\SendToAll;

/**
 * Class SendToAllTest
 * @package MadMimi\Tests\Options
 */
class SendToAllTest extends \PHPUnit_Framework_TestCase
{
    public function testSetListsFails()
    {
        $this->setExpectedException('\DomainException', 'This method (MadMimi\Options\SendToAll::setLists) is not implemented in this class.');
        $options = new SendToAll();
        $options->setLists([]);
    }

    public function testSetMergeDataFails()
    {
        $this->setExpectedException('\DomainException', 'This method (MadMimi\Options\SendToAll::setMergeData) is not implemented in this class.');
        $options = new SendToAll();
        $options->setMergeData([]);
    }

}