# List All Members From List

This retrieves an xml string of all of the members in a specified list

## All Members In List Options

[MadMimi's Get Audience List Members Documentation](https://madmimi.com/developer/get_audience_list_members) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`AllByList::setPage($pageNumber)` - Sets the page number to retrieve

`AllByList::setRecordsPerPage($recordsPerPage)` - Sets the amount of records per page

`AllByList::setOrder($order)` - Sets the property to order by

`AllByList::setIncludeSuppressedMembers($boolean)` - Sets whether to include suppressed members in here or not

`AllByList::setSuppressedMembersOnly($boolean)` - Sets whether this should return suppressed members *only*

`AllByList::setListName($listName)` - Sets the list name to query


## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
