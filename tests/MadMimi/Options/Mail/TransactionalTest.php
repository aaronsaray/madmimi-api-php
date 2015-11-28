<?php
/**
 * Tests the transactional options class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Mail;

use MadMimi\Options\Mail\Transactional;

/**
 * Class TransactionalTest
 * @package MadMimi\Tests\Options\Mail
 */
class TransactionalTest extends \PHPUnit_Framework_TestCase
{
    /**
     * This tests the abstract class too
     */
    public function testSettingPropertyDoesNotExist()
    {
        $this->setExpectedException('\MadMimi\Exception\InvalidOptionException', 'nope is not defined.');
        new Transactional(['nope'=>'I do not exist exist']);
    }

    /**
     * This tests the abstract class too
     */
    public function testSettingPropertiesThroughConstructor()
    {
        $options = new Transactional(['subject'=>'my subject', 'from'=>'from@email.com']);
        $this->assertAttributeEquals('my subject', 'subject', $options);
        $this->assertAttributeEquals('from@email.com', 'from', $options);
    }

    /**
     * This tests the abstract class too
     */
    public function testSettingEmailAddressWithAndWithoutName()
    {
        $options = new Transactional();
        $options->setFrom('from@address.com');
        $this->assertAttributeEquals('from@address.com', 'from', $options);
        $options->setFrom('from2@address.com', 'my name');
        $this->assertAttributeEquals('my name <from2@address.com>', 'from', $options);
    }

    public function testSetPromotionName()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setPromotionName('my promotion name'));
        $this->assertAttributeEquals('my promotion name', 'promotion_name', $options);
    }

    public function testSetSubject()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setSubject('my subject'));
        $this->assertAttributeEquals('my subject', 'subject', $options);
    }

    public function testSetTo()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setTo('me@email.com'));
        $this->assertAttributeEquals('me@email.com', 'recipients', $options);
    }

    public function testSetFrom()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setFrom('from@email.com'));
        $this->assertAttributeEquals('from@email.com', 'from', $options);
    }

    public function testSetCc()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setCc('cc@email.com'));
        $this->assertAttributeEquals('cc@email.com', 'cc', $options);
    }

    public function testSetBcc()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setBcc('bcc@email.com'));
        $this->assertAttributeEquals('bcc@email.com', 'bcc', $options);
    }

    public function testSetSender()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setSender('sender@email.com'));
        $this->assertAttributeEquals('sender@email.com', 'sender', $options);
    }

    public function testSetPlaceholders()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setPlaceholderValues(['test'=>'first', 'test2'=>'second']));
        $this->assertAttributeEquals("test: first\ntest2: second\n", 'body', $options);
    }

    public function testSetHTML()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setHTML('<blink>Yeah</blink>'));
        $this->assertAttributeEquals('<blink>Yeah</blink>', 'raw_html', $options);
    }

    public function testSetText()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setText('I am an email!'));
        $this->assertAttributeEquals('I am an email!', 'raw_plain_text', $options);
    }

    /**
     * This method also tests the abstract method for validation of booleans
     */
    public function testSetCheckSuppressed()
    {
        $options = new Transactional();
        try {
            $options->setCheckSuppressed(1);
            $this->fail('Boolean check failed');
        }
        catch (\DomainException $de) {
            $this->assertEquals('Parameter of setCheckSuppressed must be a boolean', $de->getMessage());
        }
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->setCheckSuppressed());
        $this->assertAttributeEquals('yes', 'check_suppressed', $options);
        $options->setCheckSuppressed(false);
        $this->assertAttributeEquals('no', 'check_suppressed', $options);
        $options->setCheckSuppressed(true);
        $this->assertAttributeEquals('yes', 'check_suppressed', $options);
    }

    /**
     * @depends testSetCheckSuppressed
     */
    public function testSetTrackLinks()
    {
        $options = new Transactional();
        $options->setTrackLinks(false);
        $this->assertAttributeEquals('no', 'track_links', $options);
    }

    /**
     * @depends testSetCheckSuppressed
     */
    public function testSetHidden()
    {
        $options = new Transactional();
        $options->setHidden(false);
        $this->assertAttributeEquals('no', 'hidden', $options);
    }

    /**
     * @depends testSetCheckSuppressed
     */
    public function testSetSkipPlaceholders()
    {
        $options = new Transactional();
        $options->setSkipPlaceholders(false);
        $this->assertAttributeEquals('no', 'skip_placeholders', $options);
    }

    public function testAddRecipientToLists()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Mail\Transactional', $options->addRecipientToLists(['first list', "Aaron's List", '"fake" list']));
        $this->assertAttributeEquals('"first list","Aaron\'s List","""fake"" list"', 'list_names', $options);
    }

    public function testEndPoint()
    {
        $options = new Transactional();
        $this->assertEquals('/mailer', $options->getEndPoint());
    }

    public function testRequestType()
    {
        $options = new Transactional();
        $this->assertEquals('post', $options->getRequestType());
    }
}