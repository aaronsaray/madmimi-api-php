<?php
/**
 * Tests the single webform class
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Webforms;
use MadMimi\Options\Webforms\Single;

/**
 * Class SingleTest
 * @package MadMimi\Tests\Options\Webforms
 */
class SingleTest extends \PHPUnit_Framework_TestCase
{
    public function testEndPoint()
    {
        $options = new Single();
        $options->setWebformId('webform-id');
        $this->assertEquals('/signups/webform-id.json', $options->getEndPoint());
    }
}