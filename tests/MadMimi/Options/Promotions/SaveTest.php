<?php
/**
 * Tests the option for saving a single promotion
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Promotions;

use MadMimi\Options\Promotions\Save;

/**
 * Class SaveTest
 * @package MadMimi\Tests\Options\Promotions
 */
class SaveTest extends \PHPUnit_Framework_TestCase
{
    public function testSetPromotionName()
    {
        $options = new Save();
        $this->assertInstanceOf('MadMimi\Options\Promotions\Save', $options->setName('my promo name'));
        $this->assertAttributeEquals('my promo name', 'promotion_name', $options);
    }

    public function testSetUrl()
    {
        $options = new Save();
        $this->assertInstanceOf('MadMimi\Options\Promotions\Save', $options->setUrl('a-cool-url'));
        $this->assertAttributeEquals('a-cool-url', 'url', $options);
    }

    public function testSetHTML()
    {
        $options = new Save();
        $this->assertInstanceOf('\MadMimi\Options\Promotions\Save', $options->setHTML('<marquee>What?</marquee>'));
        $this->assertAttributeEquals('<marquee>What?</marquee>', 'raw_html', $options);
    }

    public function testSetText()
    {
        $options = new Save();
        $this->assertInstanceOf('\MadMimi\Options\Promotions\Save', $options->setText('Hello pal...'));
        $this->assertAttributeEquals('Hello pal...', 'raw_plain_text', $options);
    }

    public function testGetRequestType()
    {
        $options = new Save();
        $this->assertEquals('post', $options->getRequestType());
    }

    public function testEndPoint()
    {
        $options = new Save();
        $this->assertEquals('/promotions/save', $options->getEndPoint());
    }

}