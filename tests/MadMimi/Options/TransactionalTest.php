<?php
/**
 * Tests the transactional options class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options;

use MadMimi\Options\Transactional;

/**
 * Class TransactionalTest
 * @package MadMimi\Tests\Options
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
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setPromotionName('my promotion name'));
        $this->assertAttributeEquals('my promotion name', 'promotion_name', $options);
    }

    public function testSetSubject()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setSubject('my subject'));
        $this->assertAttributeEquals('my subject', 'subject', $options);
    }

    public function testSetTo()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setTo('me@email.com'));
        $this->assertAttributeEquals('me@email.com', 'recipients', $options);
    }

    public function testSetFrom()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setFrom('from@email.com'));
        $this->assertAttributeEquals('from@email.com', 'from', $options);
    }

    public function testSetCc()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setCc('cc@email.com'));
        $this->assertAttributeEquals('cc@email.com', 'cc', $options);
    }

    public function testSetBcc()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setBcc('bcc@email.com'));
        $this->assertAttributeEquals('bcc@email.com', 'bcc', $options);
    }

    public function testSetSender()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setSender('sender@email.com'));
        $this->assertAttributeEquals('sender@email.com', 'sender', $options);
    }

    public function testSetBodyYaml()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setBodyYaml('some: yaml'));
        $this->assertAttributeEquals('some: yaml', 'body', $options);
    }

    public function testSetPlaceholders()
    {
        $options = new Transactional();
        $this->assertInstanceOf('\MadMimi\Options\Transactional', $options->setPlaceholderValues(['test'=>'first', 'test2'=>'second']));
        $this->assertAttributeEquals("test: first\ntest2: second\n", 'body', $options);
    }
}