<?php
/**
 * Tests the update child account
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\ChildAccounts;
use MadMimi\Options\Addons\ChildAccounts\Update;

/**
 * Class UpdateTest - same as add - except for the endpoint
 * @package MadMimi\Tests\Options\Addons\ChildAccounts
 */
class UpdateTest extends \PHPUnit_Framework_TestCase
{
   public function testEndPoint()
    {
        $options = new Update();
        $this->assertEquals('/participants/update', $options->getEndPoint());
    }
}