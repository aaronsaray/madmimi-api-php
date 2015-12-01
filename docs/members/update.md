# Update Member 

Updates a member's attributes or list membership.

## Update Member Options

[MadMimi's Update Member Documentation](https://madmimi.com/developer/lists/audience-update) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`Update::setEmail($email)` - Sets the email for the user that we wish to update

`Update::setAttributes([])` - Sets an array of attributes for this user - please see the documentation for format

`Update::addToLists([])` - An array of list IDs to add this user to

`Update::removeFromLists([])` - An array of list IDs to remove this user from

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
