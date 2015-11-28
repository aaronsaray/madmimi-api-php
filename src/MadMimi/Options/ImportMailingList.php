<?php
/**
 * Import an audience and send to that list
 *
 * @author Aaron Saray
 */

namespace MadMimi\Options;

/**
 * Class ImportMailingList
 *
 * @see https://madmimi.com/developer/mailer/import-and-send-to-a-list
 * @package MadMimi\Options
 */
class ImportMailingList extends MailingList
{
    /**
     * @var string csv file data for import
     */
    protected $csv_file;

    /**
     * @var string the name of the mailing list to import into
     */
    protected $audience_list;

    /**
     * @return string the end point
     */
    public function getEndPoint()
    {
        return '/mailer/to_imported_list';
    }

    /**
     * CSV data from an import file
     *
     * This expects that you have a properly formatted CSV file for import - and you're sending the plain text data into this call
     *
     * @param $csvData string the content from a csv file for the import
     * @return $this
     */
    public function setCsvData($csvData)
    {
        $this->csv_file = $csvData;
        return $this;
    }

    /**
     * Set the list to import to
     *
     * @param $list string
     * @return $this
     */
    public function setList($list)
    {
        $this->audience_list = $list;
        return $this;
    }

    /**
     * @param array $lists
     * @return void
     * @throws \DomainException
     */
    public function setLists(array $lists)
    {
        throw new \DomainException('This method is not implemented in this class.');
    }
}