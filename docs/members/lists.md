# Get a Member's Lists

This retrieves an xml string representing all the lists a member is subscribed to.

## Member Lists Options

[MadMimi's Audience List Membership Status Documentation](https://madmimi.com/developer/lists/membership-status) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`Single::setEmail($email)` - Sets the email of the member

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
