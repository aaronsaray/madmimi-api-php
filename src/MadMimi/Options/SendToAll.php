<?php
/**
 * Send to your entire audience
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;

/**
 * Class SendToAll
 *
 * @see https://madmimi.com/developer/mailer/send_to_all
 * @package MadMimi\Options
 */
class SendToAll extends MailingList
{
    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/mailer/to_all';
    }

    /**
     * @param array $lists
     * @return void
     * @throws \DomainException
     */
    public function setLists(array $lists)
    {
        throw new \DomainException('This method (' . __METHOD__ . ') is not implemented in this class.');
    }

    /**
     * @todo This property is not mentioned in the documentation - but I wonder if it actually exists or not?
     * @param array $mergeData
     * @return void
     * @throws \DomainException
     */
    public function setMergeData(array $mergeData)
    {
        throw new \DomainException('This method (' . __METHOD__ . ') is not implemented in this class.');
    }
}