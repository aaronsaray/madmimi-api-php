<?php
/**
 * Tests suppressed since a specific date
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Members;
use MadMimi\Options\Members\SuppressedSince;

/**
 * Class SuppressedSinceTest
 * @package MadMimi\Tests\Options\Members
 */
class SuppressedSinceTest extends \PHPUnit_Framework_TestCase
{
    public function testSetEmail()
    {
        $options = new SuppressedSince();
        $this->assertInstanceOf('MadMimi\Options\Members\SuppressedSince', $options->setFromDate(new \DateTime('2015-01-01 10:11:12')));
        $this->assertAttributeEquals(1420128672, 'timestamp', $options);
    }

    public function testSetShowSuppressionReason()
    {
        $options = new SuppressedSince();
        $this->assertInstanceOf('MadMimi\Options\Members\SuppressedSince', $options->setShowSuppressionReason(true));
        $this->assertAttributeEquals(true, 'show_suppression_reason', $options);
    }

    public function testEndPoint()
    {
        $options = new SuppressedSince();
        $options->setFromDate(new \DateTime('2012-10-12 02:04:06'));
        $this->assertEquals('/audience_members/suppressed_since/1350025446.txt', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new SuppressedSince();
        $this->assertEquals('post', $options->getRequestType());
    }
}