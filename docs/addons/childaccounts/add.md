# Add a Child Account

Add a child account to this account.

## Add a Child Account Options

[MadMimi's List Addons Documentation](https://madmimi.com/developer/addon-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.   

### Method Reference

`Add::setEmail($email)` - Sets the email of the account

`Add::setFirstName($firstName)` - Sets the first name of this user

`Add::setLastName($lastName)` - Sets the last name of this user

`Add::setOrganizationName($organizationName)` - Sets the organization of this user

`Add::setAddress($address)` - Sets the address? of this user

`Add::setPassword($password)` - Sets the password for this user

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
