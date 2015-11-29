# Toggle a User's Addons

This toggles the current account's add on.

## Toggle User's Addons Options

[MadMimi's List Addons Documentation](https://madmimi.com/developer/addon-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.   

### Method Reference

`Toggle::setAddonKey($addonKey)` - Sets the add on key to toggle (technically this could be the ID too if you know what that is...)

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
