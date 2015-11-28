<?php
/**
 * Tests the mailing list options class
 * 
 * @see TransactionalTest for abstract tests
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options;

use MadMimi\Options\MailingList;

/**
 * Class MailingListTest
 * @package MadMimi\Tests\Options
 */
class MailingListTest extends \PHPUnit_Framework_TestCase
{
    public function testSetPromotionName()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setPromotionName('a promotion name'));
        $this->assertAttributeEquals('a promotion name', 'promotion_name', $options);
    }

    public function testSetSubject()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setSubject('a subject'));
        $this->assertAttributeEquals('a subject', 'subject', $options);
    }

    public function testSetFrom()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setFrom('from@email.com'));
        $this->assertAttributeEquals('from@email.com', 'from', $options);
    }

    public function testSetPlaceholders()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setPlaceholderValues(['test'=>'first', 'test2'=>'second']));
        $this->assertAttributeEquals("test: first\ntest2: second\n", 'body', $options);
    }

    public function testSetHTML()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setHTML('<blink>Yeah</blink>'));
        $this->assertAttributeEquals('<blink>Yeah</blink>', 'raw_html', $options);
    }

    public function testSetText()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setText('I am an email!'));
        $this->assertAttributeEquals('I am an email!', 'raw_plain_text', $options);
    }

    public function testSetTrackLinks()
    {
        $options = new MailingList();
        $options->setTrackLinks(false);
        $this->assertAttributeEquals('no', 'track_links', $options);
    }

    public function testSetHidden()
    {
        $options = new MailingList();
        $options->setHidden(false);
        $this->assertAttributeEquals('no', 'hidden', $options);
    }

    public function testPreventResend()
    {
        $options = new MailingList();
        $options->setPreventResend(false);
        $this->assertAttributeEquals('no', 'prevent_resend', $options);
    }

    public function testSetLists()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setLists(['first list', "Aaron's List", '"fake" list']));
        $this->assertAttributeEquals('"first list","Aaron\'s List","""fake"" list"', 'list_names', $options);
    }

    public function testSetMergeData()
    {
        $options = new MailingList();
        $this->assertInstanceOf('\MadMimi\Options\MailingList', $options->setMergeData(['merge', 'data']));
        $this->assertAttributeEquals('merge,data', 'merge_data', $options);
    }
}