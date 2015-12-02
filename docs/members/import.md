# Import Members

Import members from a CSV data file

## Create Member Options

[MadMimi's Import Members Documentation](https://madmimi.com/developer/lists/audience-import) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier. **dude - for real - read this**

### Method Reference

`Import::setCsvFileData($data)` - Sets the data from a csv import

`Import::setListName($name)` - Sets the list for the members to be imported to (optional)

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
