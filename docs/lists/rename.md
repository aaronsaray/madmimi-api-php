# Rename a list

This renames a particular list

## Rename List Options

[MadMimi's List Documentation](https://madmimi.com/developer/lists) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`Rename::setName($name)` - Sets the original name of the list

`Rename::setNewName($name)` - Sets the new name of the list

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
