# Update List Permission for Child Account

Update the child account's access and permission to lists via their name and the properties of full, read, or none.

## Update a Child Account's List Permission Addon Options

[MadMimi's List Addons Documentation](https://madmimi.com/developer/addon-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.   

### Method Reference

`Permissions::setEmail($email)` - Sets the email of the child account to alter permissions for

`Permissions::setListsToFullPermission([])` - An array of list names to add full permission to for this user

`Permissions::setListsToReadPermission([])` - An array of list names to add read only permission to for this user

`Permissions::setListsToNoPermission([])` - An array of list names to remove permission to for this user

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
