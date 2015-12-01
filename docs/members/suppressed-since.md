# List Members Suppressed Since

This retrieves a list of members that have been suppressed since a specific date

## List Members Suppressed Since Options

[MadMimi's List All Members Documentation](https://madmimi.com/developer/lists) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`SuppressedSince::setFromDate(\DateTime $fromDate)` - Sets the date that the query should start with

`SuppressedSince::setShowSuppressionReason($bool)` - Show the reason as well as the user information

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
