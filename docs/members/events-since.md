# List Member Events Since

This retrieves a list of events of members from a specific date.

## List Members Events Since Options

[MadMimi's List All Members Documentation](https://madmimi.com/developer/lists) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`EventsSince::setFromDate(\DateTime $fromDate)` - Sets the date that the query should start with

`EventsSince::setActionType($actionType)` - Sets an action type filter

`EventsSince::setListName($listName)` - Sets the list name to filter

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
