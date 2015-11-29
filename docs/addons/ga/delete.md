# Delete a Google Analytic Domain

Delete a google analytic domain to this account.

## Delete a GA Domain Addon Options

[MadMimi's List Addons Documentation](https://madmimi.com/developer/addon-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.   

### Method Reference

`Add::setDomain($domain)` - Sets the domain you'd like to delete

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
