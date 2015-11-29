# Get Single Webform

This gets a json string with the properties of the specified webform.

## Single Webform Options

[MadMimi's Get Webforms Documentation](https://madmimi.com/developer/get-webform) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.  

Please keep in mind - **the webform ID must be set** for this class.

### Method Reference

`Single::setWebformId($webformId)` - Sets the webform ID that should be retrieved

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
