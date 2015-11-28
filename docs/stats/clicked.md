# Get Clicked Stats

This gets an XML document with the clicked stats for a particular promotion and mail send.

## Clicked Stats Options

[MadMimi's Statistics API Documentation](https://madmimi.com/developer/statistics-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.  

Please keep in mind - **both promotion ID and mailing ID must be set** for this class.

### Method Reference

`Clicked::setPromotionId($promotionId)` - Sets the promotion ID that should be retrieved
`Clicked::setMailingId($promotionId)` - Sets the mailing ID that should be retrieved
`Clicked::setPage($pageNumber)` - Sets the page of records to view
`Clicked::setRecordsPerPage($recordsPerPage)` - Sets the amount of records per page

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
