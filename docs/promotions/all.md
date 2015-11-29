# List All Promotions

This gets an XML document with all the promotions in this account.

## All Promotions Options

[MadMimi's Promotion Documentation](https://madmimi.com/developer/api/promotions) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.  

### Method Reference

`All::setPage($pageNumber)` - Sets the page of records to view

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
