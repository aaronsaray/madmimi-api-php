# Import Member Status

Status of the import member request

## Import Member Status Options

[MadMimi's Import Members to List Documentation](https://madmimi.com/developer/lists) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`ImportStatus::setImportId($importId)` - Sets the import ID

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
