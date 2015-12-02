<?php
/**
 * Test the populated method
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options;
use MadMimi\Options\Members\All;

/**
 * Class OptionsAbstractTest
 * @package MadMimi\Tests\Options
 */
class OptionsAbstractTest extends \PHPUnit_Framework_TestCase
{
    public function testGetPopulatedEmptyArray()
    {
        $stub = $this->getMockForAbstractClass('MadMimi\Options\OptionsAbstract');

        $this->assertEmpty($stub->getPopulated());
    }

    public function testGetPopulatedWithProperties()
    {
        $allMembers = new All();
        $allMembers->setOrder('order-direction')
            ->setPage(3);

        $this->assertEquals(['order'=>'order-direction', 'page'=>3], $allMembers->getPopulated());
    }
}