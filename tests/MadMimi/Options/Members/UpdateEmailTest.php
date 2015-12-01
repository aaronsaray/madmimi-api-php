<?php
/**
 * Tests updates the email for this user
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\UpdateEmail;

/**
 * Class UpdateEmailTest
 * @package MadMimi\Tests\Options\Members
 */
class UpdateEmailTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new UpdateEmail();
        $this->assertInstanceOf('MadMimi\Options\Members\UpdateEmail', $options->setEmail('my@email.com'));
        $this->assertAttributeEquals('my@email.com', 'email', $options);
    }

    public function testSetNewEmail()
    {
        $options = new UpdateEmail();
        $this->assertInstanceOf('MadMimi\Options\Members\UpdateEmail', $options->setNewEmail('new-my@email.com'));
        $this->assertAttributeEquals('new-my@email.com', 'new_email', $options);
    }

    public function testEndPoint()
    {
        $options = new UpdateEmail();
        $options->setEmail('my-email');
        $this->assertEquals('/audience_members/my-email/update_email', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new UpdateEmail();
        $this->assertEquals('post', $options->getRequestType());
    }
}