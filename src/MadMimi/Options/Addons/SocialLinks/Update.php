<?php
/**
 * Update one or more of the user's social links
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options\Addons\SocialLinks;
use MadMimi\Options\OptionsAbstract;

/**
 * Class Update
 *
 * @see https://madmimi.com/developer/addon-api-methods
 * @package MadMimi\Options\Addons\SocialLinks
 */
class Update extends OptionsAbstract
{
    /**
     * @var string
     */
    protected $blogger;

    /**
     * @var string
     */
    protected $delicious;

    /**
     * @var string
     */
    protected $facebook;

    /**
     * @var string
     */
    protected $feed;

    /**
     * @var string
     */
    protected $flickr;

    /**
     * @var string
     */
    protected $lastfm;

    /**
     * @var string
     */
    protected $linkedin;

    /**
     * @var string
     */
    protected $myspace;

    /**
     * @var string
     */
    protected $twitter;

    /**
     * @var string
     */
    protected $wordpress;

    /**
     * @var string
     */
    protected $youtube;

    /**
     * @var string
     */
    protected $tumblr;

    /**
     * @var string
     */
    protected $foursquare;

    /**
     * @var string
     */
    protected $vimeo;

    /**
     * @var string
     */
    protected $aim;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $orkut;

    /**
     * @var string
     */
    protected $paypal;

    /**
     * @var string
     */
    protected $reddit;

    /**
     * @var string
     */
    protected $etsy;

    /**
     * @var string
     */
    protected $skype;

    /**
     * @var string
     */
    protected $soundcloud;

    /**
     * @var string
     */
    protected $stumbleupon;

    /**
     * @var string
     */
    protected $xing;

    /**
     * @var string
     */
    protected $cdbaby;

    /**
     * @var string
     */
    protected $itunes;

    /**
     * @var string
     */
    protected $yelp;

    /**
     * @var string
     */
    protected $reverbnation;

    /**
     * @var string
     */
    protected $viadeo;

    /**
     * @var string
     */
    protected $google_plus;

    /**
     * @var string
     */
    protected $pinterest;

    /**
     * @var string
     */
    protected $custom;

    /**
     * @var string
     */
    protected $amazon;

    /**
     * @var string
     */
    protected $dribble;

    /**
     * @var string
     */
    protected $ebay;

    /**
     * @var string
     */
    protected $github;

    /**
     * @var string
     */
    protected $instagram;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $meetup;

    /**
     * @var string
     */
    protected $virb;

    /**
     * @var string
     */
    protected $weibo;

    /**
     * @var string
     */
    protected $angellist;

    /**
     * @var string
     */
    protected $_500px;

    /**
     * @var string
     */
    protected $tripadvisor;

    /**
     * @var string
     */
    protected $klout;

    /**
     * @var string
     */
    protected $dropbox;

    /**
     * @var string
     */
    protected $vine;

    /**
     * @var string
     */
    protected $kickstarter;

    /**
     * @var string
     */
    protected $quora;

    /**
     * @var string
     */
    protected $bandcamp;

    /**
     * @var string
     */
    protected $goodreads;

    /**
     * @param string $blogger
     * @return Update
     */
    public function setBlogger($blogger)
    {
        $this->blogger = $blogger;
        return $this;
    }

    /**
     * @param string $delicious
     * @return Update
     */
    public function setDelicious($delicious)
    {
        $this->delicious = $delicious;
        return $this;
    }

    /**
     * @param string $facebook
     * @return Update
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
        return $this;
    }

    /**
     * @param string $feed
     * @return Update
     */
    public function setFeed($feed)
    {
        $this->feed = $feed;
        return $this;
    }

    /**
     * @param string $flickr
     * @return Update
     */
    public function setFlickr($flickr)
    {
        $this->flickr = $flickr;
        return $this;
    }

    /**
     * @param string $lastfm
     * @return Update
     */
    public function setLastFM($lastfm)
    {
        $this->lastfm = $lastfm;
        return $this;
    }

    /**
     * @param string $linkedin
     * @return Update
     */
    public function setLinkedIn($linkedin)
    {
        $this->linkedin = $linkedin;
        return $this;
    }

    /**
     * @param string $myspace
     * @return Update
     */
    public function setMyspace($myspace)
    {
        $this->myspace = $myspace;
        return $this;
    }

    /**
     * @param string $twitter
     * @return Update
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
        return $this;
    }

    /**
     * @param string $wordpress
     * @return Update
     */
    public function setWordpress($wordpress)
    {
        $this->wordpress = $wordpress;
        return $this;
    }

    /**
     * @param string $youtube
     * @return Update
     */
    public function setYouTube($youtube)
    {
        $this->youtube = $youtube;
        return $this;
    }

    /**
     * @param string $tumblr
     * @return Update
     */
    public function setTumblr($tumblr)
    {
        $this->tumblr = $tumblr;
        return $this;
    }

    /**
     * @param string $foursquare
     * @return Update
     */
    public function setFoursquare($foursquare)
    {
        $this->foursquare = $foursquare;
        return $this;
    }

    /**
     * @param string $vimeo
     * @return Update
     */
    public function setVimeo($vimeo)
    {
        $this->vimeo = $vimeo;
        return $this;
    }

    /**
     * @param string $aim
     * @return Update
     */
    public function setAIM($aim)
    {
        $this->aim = $aim;
        return $this;
    }

    /**
     * @param string $email
     * @return Update
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $orkut
     * @return Update
     */
    public function setOrkut($orkut)
    {
        $this->orkut = $orkut;
        return $this;
    }

    /**
     * @param string $paypal
     * @return Update
     */
    public function setPayPal($paypal)
    {
        $this->paypal = $paypal;
        return $this;
    }

    /**
     * @param string $reddit
     * @return Update
     */
    public function setReddit($reddit)
    {
        $this->reddit = $reddit;
        return $this;
    }

    /**
     * @param string $etsy
     * @return Update
     */
    public function setEtsy($etsy)
    {
        $this->etsy = $etsy;
        return $this;
    }

    /**
     * @param string $skype
     * @return Update
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
        return $this;
    }

    /**
     * @param string $soundcloud
     * @return Update
     */
    public function setSoundCloud($soundcloud)
    {
        $this->soundcloud = $soundcloud;
        return $this;
    }

    /**
     * @param string $stumbleupon
     * @return Update
     */
    public function setStumbleUpon($stumbleupon)
    {
        $this->stumbleupon = $stumbleupon;
        return $this;
    }

    /**
     * @param string $xing
     * @return Update
     */
    public function setXing($xing)
    {
        $this->xing = $xing;
        return $this;
    }

    /**
     * @param string $cdbaby
     * @return Update
     */
    public function setCDBaby($cdbaby)
    {
        $this->cdbaby = $cdbaby;
        return $this;
    }

    /**
     * @param string $itunes
     * @return Update
     */
    public function setItunes($itunes)
    {
        $this->itunes = $itunes;
        return $this;
    }

    /**
     * @param string $yelp
     * @return Update
     */
    public function setYelp($yelp)
    {
        $this->yelp = $yelp;
        return $this;
    }

    /**
     * @param string $reverbnation
     * @return Update
     */
    public function setReverbNation($reverbnation)
    {
        $this->reverbnation = $reverbnation;
        return $this;
    }

    /**
     * @param string $viadeo
     * @return Update
     */
    public function setViadeo($viadeo)
    {
        $this->viadeo = $viadeo;
        return $this;
    }

    /**
     * @param string $google_plus
     * @return Update
     */
    public function setGooglePlus($google_plus)
    {
        $this->google_plus = $google_plus;
        return $this;
    }

    /**
     * @param string $pinterest
     * @return Update
     */
    public function setPinterest($pinterest)
    {
        $this->pinterest = $pinterest;
        return $this;
    }

    /**
     * @param string $custom
     * @return Update
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * @param string $amazon
     * @return Update
     */
    public function setAmazon($amazon)
    {
        $this->amazon = $amazon;
        return $this;
    }

    /**
     * @param string $dribble
     * @return Update
     */
    public function setDribble($dribble)
    {
        $this->dribble = $dribble;
        return $this;
    }

    /**
     * @param string $ebay
     * @return Update
     */
    public function setEbay($ebay)
    {
        $this->ebay = $ebay;
        return $this;
    }

    /**
     * @param string $github
     * @return Update
     */
    public function setGithub($github)
    {
        $this->github = $github;
        return $this;
    }

    /**
     * @param string $instagram
     * @return Update
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
        return $this;
    }

    /**
     * @param string $path
     * @return Update
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @param string $meetup
     * @return Update
     */
    public function setMeetup($meetup)
    {
        $this->meetup = $meetup;
        return $this;
    }

    /**
     * @param string $virb
     * @return Update
     */
    public function setVirb($virb)
    {
        $this->virb = $virb;
        return $this;
    }

    /**
     * @param string $weibo
     * @return Update
     */
    public function setWeibo($weibo)
    {
        $this->weibo = $weibo;
        return $this;
    }

    /**
     * @param string $angellist
     * @return Update
     */
    public function setAngelList($angellist)
    {
        $this->angellist = $angellist;
        return $this;
    }

    /**
     * @param string $tripadvisor
     * @return Update
     */
    public function setTripAdvisor($tripadvisor)
    {
        $this->tripadvisor = $tripadvisor;
        return $this;
    }

    /**
     * @param string $klout
     * @return Update
     */
    public function setKlout($klout)
    {
        $this->klout = $klout;
        return $this;
    }

    /**
     * @param string $dropbox
     * @return Update
     */
    public function setDropbox($dropbox)
    {
        $this->dropbox = $dropbox;
        return $this;
    }

    /**
     * @param string $vine
     * @return Update
     */
    public function setVine($vine)
    {
        $this->vine = $vine;
        return $this;
    }

    /**
     * @param string $kickstarter
     * @return Update
     */
    public function setKickstarter($kickstarter)
    {
        $this->kickstarter = $kickstarter;
        return $this;
    }

    /**
     * @param string $quora
     * @return Update
     */
    public function setQuora($quora)
    {
        $this->quora = $quora;
        return $this;
    }

    /**
     * @param string $bandcamp
     * @return Update
     */
    public function setBandcamp($bandcamp)
    {
        $this->bandcamp = $bandcamp;
        return $this;
    }

    /**
     * @param string $goodreads
     * @return Update
     */
    public function setGoodreads($goodreads)
    {
        $this->goodreads = $goodreads;
        return $this;
    }

    /**
     * @param string $_500px
     * @return Update
     */
    public function set500px($_500px)
    {
        $this->_500px = $_500px;
        return $this;
    }

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return "/social_links/update";
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }
}