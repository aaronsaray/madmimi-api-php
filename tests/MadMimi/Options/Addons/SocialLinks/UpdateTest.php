<?php
/**
 * Tests the update user social links update options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Tests\Options\Addons\SocialLinks;
use MadMimi\Options\Addons\SocialLinks\Update;

/**
 * Class UpdateTest
 * @package MadMimi\Tests\Options\Addons
 */
class UpdateTest extends \PHPUnit_Framework_TestCase
{
    public function testSet500px()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->set500px('some-value'));
        $this->assertAttributeEquals('some-value', '_500px', $options);
    }

    public function testSetBlogger()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setBlogger('some-value'));
        $this->assertAttributeEquals('some-value', 'blogger', $options);
    }

    public function testSetDelicious()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setDelicious('some-value'));
        $this->assertAttributeEquals('some-value', 'delicious', $options);
    }

    public function testSetFacebook()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setFacebook('some-value'));
        $this->assertAttributeEquals('some-value', 'facebook', $options);
    }

    public function testSetFeed()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setFeed('some-value'));
        $this->assertAttributeEquals('some-value', 'feed', $options);
    }

    public function testSetFlickr()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setFlickr('some-value'));
        $this->assertAttributeEquals('some-value', 'flickr', $options);
    }

    public function testSetLastfm()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setLastFM('some-value'));
        $this->assertAttributeEquals('some-value', 'lastfm', $options);
    }

    public function testLinkedIn()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setLinkedIn('some-value'));
        $this->assertAttributeEquals('some-value', 'linkedin', $options);
    }

    public function testMyspace()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setMyspace('some-value'));
        $this->assertAttributeEquals('some-value', 'myspace', $options);
    }

    public function testSetTwitter()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setTwitter('some-value'));
        $this->assertAttributeEquals('some-value', 'twitter', $options);
    }

    public function testSetWordpress()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setWordpress('some-value'));
        $this->assertAttributeEquals('some-value', 'wordpress', $options);
    }

    public function testSetYoutube()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setYouTube('some-value'));
        $this->assertAttributeEquals('some-value', 'youtube', $options);
    }

    public function testSetTumblr()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setTumblr('some-value'));
        $this->assertAttributeEquals('some-value', 'tumblr', $options);
    }

    public function testSetFoursquare()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setFoursquare('some-value'));
        $this->assertAttributeEquals('some-value', 'foursquare', $options);
    }

    public function testSetVimeo()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setVimeo('some-value'));
        $this->assertAttributeEquals('some-value', 'vimeo', $options);
    }

    public function testSetAim()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setAIM('some-value'));
        $this->assertAttributeEquals('some-value', 'aim', $options);
    }

    public function testSetEmail()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setEmail('some-value'));
        $this->assertAttributeEquals('some-value', 'email', $options);
    }

    public function testSetOrkut()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setOrkut('some-value'));
        $this->assertAttributeEquals('some-value', 'orkut', $options);
    }

    public function testSetPaypal()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setPayPal('some-value'));
        $this->assertAttributeEquals('some-value', 'paypal', $options);
    }

    public function testSetReddit()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setReddit('some-value'));
        $this->assertAttributeEquals('some-value', 'reddit', $options);
    }

    public function testSetEtsy()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setEtsy('some-value'));
        $this->assertAttributeEquals('some-value', 'etsy', $options);
    }

    public function testSetSkype()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setSkype('some-value'));
        $this->assertAttributeEquals('some-value', 'skype', $options);
    }

    public function testSetSoundcloud()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setSoundCloud('some-value'));
        $this->assertAttributeEquals('some-value', 'soundcloud', $options);
    }

    public function testSetStumbleupon()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setStumbleUpon('some-value'));
        $this->assertAttributeEquals('some-value', 'stumbleupon', $options);
    }

    public function testSetXing()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setXing('some-value'));
        $this->assertAttributeEquals('some-value', 'xing', $options);
    }

    public function testSetCdbaby()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setCDBaby('some-value'));
        $this->assertAttributeEquals('some-value', 'cdbaby', $options);
    }

    public function testSetItunes()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setItunes('some-value'));
        $this->assertAttributeEquals('some-value', 'itunes', $options);
    }

    public function testSetYelp()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setYelp('some-value'));
        $this->assertAttributeEquals('some-value', 'yelp', $options);
    }

    public function testSetReverbnation()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setReverbNation('some-value'));
        $this->assertAttributeEquals('some-value', 'reverbnation', $options);
    }

    public function testSetViadeo()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setViadeo('some-value'));
        $this->assertAttributeEquals('some-value', 'viadeo', $options);
    }

    public function testSetGooglePlus()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setGooglePlus('some-value'));
        $this->assertAttributeEquals('some-value', 'google_plus', $options);
    }

    public function testSetPinterest()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setPinterest('some-value'));
        $this->assertAttributeEquals('some-value', 'pinterest', $options);
    }

    public function testSetCustom()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setCustom('some-value'));
        $this->assertAttributeEquals('some-value', 'custom', $options);
    }

    public function testSetAmazon()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setAmazon('some-value'));
        $this->assertAttributeEquals('some-value', 'amazon', $options);
    }

    public function testSetDribble()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setDribble('some-value'));
        $this->assertAttributeEquals('some-value', 'dribble', $options);
    }

    public function testSetEbay()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setEbay('some-value'));
        $this->assertAttributeEquals('some-value', 'ebay', $options);
    }

    public function testSetGithub()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setGithub('some-value'));
        $this->assertAttributeEquals('some-value', 'github', $options);
    }

    public function testSetInstagram()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setInstagram('some-value'));
        $this->assertAttributeEquals('some-value', 'instagram', $options);
    }

    public function testSetPath()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setPath('some-value'));
        $this->assertAttributeEquals('some-value', 'path', $options);
    }

    public function testSetMeetup()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setMeetup('some-value'));
        $this->assertAttributeEquals('some-value', 'meetup', $options);
    }

    public function testSetVirb()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setVirb('some-value'));
        $this->assertAttributeEquals('some-value', 'virb', $options);
    }

    public function testSetWeibo()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setWeibo('some-value'));
        $this->assertAttributeEquals('some-value', 'weibo', $options);
    }

    public function testSetAngellist()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setAngelList('some-value'));
        $this->assertAttributeEquals('some-value', 'angellist', $options);
    }

    public function testSetTripadvisor()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setTripAdvisor('some-value'));
        $this->assertAttributeEquals('some-value', 'tripadvisor', $options);
    }

    public function testSetKlout()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setKlout('some-value'));
        $this->assertAttributeEquals('some-value', 'klout', $options);
    }

    public function testSetDropbox()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setDropbox('some-value'));
        $this->assertAttributeEquals('some-value', 'dropbox', $options);
    }

    public function testSetVine()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setVine('some-value'));
        $this->assertAttributeEquals('some-value', 'vine', $options);
    }

    public function testSetKickstarter()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setKickstarter('some-value'));
        $this->assertAttributeEquals('some-value', 'kickstarter', $options);
    }

    public function testSetQuora()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setQuora('some-value'));
        $this->assertAttributeEquals('some-value', 'quora', $options);
    }

    public function testSetBandcamp()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setBandcamp('some-value'));
        $this->assertAttributeEquals('some-value', 'bandcamp', $options);
    }

    public function testSetGoodreads()
    {
        $options = new Update();
        $this->assertInstanceOf('MadMimi\Options\Addons\SocialLinks\Update', $options->setGoodreads('some-value'));
        $this->assertAttributeEquals('some-value', 'goodreads', $options);
    }

    public function testEndPoint()
    {
        $options = new Update();
        $this->assertEquals('/social_links/update', $options->getEndPoint());
    }

    public function testGetRequestType()
    {
        $options = new Update();
        $this->assertEquals('post', $options->getRequestType());
    }
}