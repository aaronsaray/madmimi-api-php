# Search Promotions

This gets an XML document with the promotions that match the search criteria

## Search Promotion Options

[MadMimi's Promotion Documentation](https://madmimi.com/developer/api/promotions) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.  

### Method Reference

`Search::setNamePart($namePart)` - Search by this fragment of the promotion name

`Search::setName($name)` - Search by this exact promotion name

`Search::setIncludeApiMailings()` - Whether to include mailings sent by the API

`Search::setFromDate(\DateTime $fromDate)` - The beginning of the search window - must PHP DateTime object

`Search::setToDate(\DateTime $toDate)` - The end of the search window - must PHP DateTime object

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
