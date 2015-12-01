# List All Lists

This retrieves an xml string of all of thelists for this account.

## All Lists Options

[MadMimi's List Documentation](https://madmimi.com/developer/lists) should give you an idea
of what you need to send to the API - in this case - it's nothing!

### Method Reference

There are none!

## Exceptions

The following exceptions may be thrown throughout the duration of a options object - although I don't know why you'd attempt to pass anything in to the constructor to cause this?

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
