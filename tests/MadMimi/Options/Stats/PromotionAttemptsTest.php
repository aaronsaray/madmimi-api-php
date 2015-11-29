<?php
/**
 * Tests the promotion attempts stat class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;
use MadMimi\Options\Stats\PromotionAttempts;

/**
 * Class PromotionAttemptsTest
 * @package MadMimi\Tests\Options\Stats
 */
class PromotionAttemptsTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new PromotionAttempts();
        $this->assertInstanceOf('MadMimi\Options\Stats\PromotionAttempts', $options->setEmail('test@email.com'));
        $this->assertAttributeEquals('test@email.com', 'email', $options);
    }

    public function testEndPoint()
    {
        $options = new PromotionAttempts();
        $options->setEmail('my@email.com');
        $this->assertEquals('/audience_members/my@email.com/promotion_attempts.xml', $options->getEndPoint());
    }
}