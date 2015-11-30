# List All Members

This retrieves an xml string of all of the members for this account.

## All Members Options

[MadMimi's List All Members Documentation](https://madmimi.com/developer/get_audience_members) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`All::setPage($pageNumber)` - Sets the page number to retrieve

`All::setRecordsPerPage($recordsPerPage)` - Sets the amount of records per page

`All::setOrder($order)` - Sets the property to order by

`All::setIncludeSuppressedMembers($boolean)` - Sets whether to include suppressed members in here or not

`All::setSuppressedMembersOnly($boolean)` - Sets whether this should return suppressed members *only*


## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
