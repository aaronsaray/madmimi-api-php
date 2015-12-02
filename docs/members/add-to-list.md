# Add Member to List

Adds a member to a list

## Add Member to List Options

[MadMimi's Add Membership Documentation](https://madmimi.com/developer/lists/add-membership) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`AddToList::setEmail($email)` - Sets the email for the user

`AddToList::setListName($listName)` - Sets the list name

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
