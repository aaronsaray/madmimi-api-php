# Get Promotion Attempts Stats

This gets an XML document with the promotion attempts stats for a particular email address.

## Promotion Attempts Stats Options

[MadMimi's Statistics API Documentation](https://madmimi.com/developer/statistics-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.  

Please keep in mind - **the email is required to be set** for this class.

### Method Reference

`PromotionAttempts::setEmail($email)` - Sets the email to query

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
