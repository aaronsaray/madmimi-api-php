# Remove Member from List

Removes a member from a list

## Remove Member from List Options

[MadMimi's Remove Membership Documentation](https://madmimi.com/developer/lists/remove-membership) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`RemoveFromList::setEmail($email)` - Sets the email for the user

`RemoveFromList::setListName($listName)` - Sets the list name

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
