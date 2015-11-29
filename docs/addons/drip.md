# List All Drip Campaigns

This retrieves an xml string of all of the drip campaigns available.

## All Drip Campaigns Options

[MadMimi's List Addons Documentation](https://madmimi.com/developer/addon-api-methods) should give you an idea
of what you need to send to the API.  In this particular case, it's nothing!  

### Method Reference

You do not need to specify any properties for this option.

## Exceptions

The following exceptions may be thrown throughout the duration of a options object - although I don't know why you'd be doing this for this option...  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
