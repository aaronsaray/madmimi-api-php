# Search Members

This retrieves an xml string of members matching the search criteria.

## Search Members Options

[MadMimi's Search Members Documentation](https://madmimi.com/developer/lists/search) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`Search::setQuery($query)` - Sets the query to search by

`Search::setIncludeSuppressedMembers($boolean)` - Sets whether to include suppressed members in here or not

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
