# Add a list

This creates a new mailing list

## Add List Options

[MadMimi's Add New Audience List Documentation](https://madmimi.com/developer/lists/add-new-audience-list) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`Add::setName($name)` - Sets the name of the list

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
