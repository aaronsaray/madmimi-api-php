# Delete a Child Account

Delete a child account.

## Delete a Child Account Addon Options

[MadMimi's List Addons Documentation](https://madmimi.com/developer/addon-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.   

### Method Reference

`Delete::setEmail($email)` - Sets the email of the child account to delete

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
