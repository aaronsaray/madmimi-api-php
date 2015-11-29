<?php
/**
 * Tests the members created count class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Stats;

use MadMimi\Options\Stats\MembersCreatedCount;

/**
 * Class MembersCreatedCountTest
 * @package MadMimi\Tests\Options\Stats
 */
class MembersCreatedCountTest extends \PHPUnit_Framework_TestCase
{
    public function testSetStartDate()
    {
        $options = new MembersCreatedCount();
        $this->assertInstanceOf('\MadMimi\Options\Stats\MembersCreatedCount', $options->setStartDate(new \DateTime('2015-02-05 10:33:32')));
        $this->assertAttributeEquals(1423154012, 'start', $options);
    }

    public function testSetEndDate()
    {
        $options = new MembersCreatedCount();
        $this->assertInstanceOf('\MadMimi\Options\Stats\MembersCreatedCount', $options->setEndDate(new \DateTime('2015-02-07 16:00:00')));
        $this->assertAttributeEquals(1423346400, 'end', $options);
    }

    public function testEndPoint()
    {
        $options = new MembersCreatedCount();
        $this->assertEquals('/audience_members/count_new', $options->getEndPoint());
    }
}