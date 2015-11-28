# Import List and Send Email 

This option is nearly identical to the [Send To Mailing List](mailing-list.md) options with only a few differences.

## Import Mailing List Options

[MadMimi's Import and Send to a List Documentation](https://madmimi.com/developer/mailer/import-and-send-to-a-list) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`ImportMailingList::setCsvData($csvData)` - Sets the csv data needed for the import in the same format as a csv import file from the web interface

`ImportMailingList::setList($list)` - The name of the list to import to

Additionally, all methods from the [Mailing List Options](mailing-list.md) are available with the exception of `setLists()`


