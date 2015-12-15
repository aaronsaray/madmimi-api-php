# Update Member Email

Updates a member's email (this is necessary and separate from the update option because the key is the email for each user).

*Please note* You must contact MadMimi to enable the advanced API on your account.

## Update Member Email Options

[MadMimi's Edit Member's Email Documentation](https://madmimi.com/developer/lists) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`UpdateEmail::setEmail($email)` - Sets the email for the user

`UpdateEmail::setNewEmail($email)` - Sets the *new* email for the user

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
