<?php
/**
 * Send to a list options
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;

/**
 * Class MailingList
 *
 * @see https://madmimi.com/developer/mailer/send-to-a-list
 * @package MadMimi\Options
 */
class MailingList extends OptionsAbstract
{
    use PromotionBaseTrait;

    /**
     * @var string a csv list of mailing lists to add to
     */
    protected $list_names;

    /**
     * @var string a boolean representation
     */
    protected $prevent_resend;

    /**
     * @var string a csv list of merge data
     */
    protected $merge_data;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/mailer/to_list';
    }

    /**
     * @return string the request type
     */
    public function getRequestType()
    {
        return self::REQUEST_TYPE_POST;
    }

    /**
     * This sets the lists to send to
     *
     * This will take care of formatting it properly for the API
     * @param array $lists
     * @return $this
     */
    public function setLists(array $lists)
    {
        return $this->setCsvValueFromArray('list_names', $lists);
    }

    /**
     * Makes sure audience doesn't recieve this again if they've received it the first time
     *
     * @param bool|true $bool
     * @return $this
     */
    public function setPreventResend($bool = true)
    {
        return $this->setTranslatedBooleanValue('prevent_resend', $bool);
    }

    /**
     * Set the merge data
     *
     * This will take care of formatting it properly for the API
     *
     * @todo figure out how this actually works
     * @param array $mergeData
     * @return $this
     */
    public function setMergeData(array $mergeData)
    {
        return $this->setCsvValueFromArray('merge_data', $mergeData);
    }
}