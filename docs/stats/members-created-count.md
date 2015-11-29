# Get Number of Audience Members Created

Get a count of audience members created in a specific date range.

## Members Created Count Options

[MadMimi's Number of Audience Members created Documentation](https://madmimi.com/developer/statistics-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`TransactionalCount::setStartDate(\DateTime $date)` - Sets the start date to retrieve the count from.  This must be a PHP DateTime object
`TransactionalCount::setEndDate(\DateTime $date)` - Sets the end date to retrieve the count from.  This must be a PHP DateTime object

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
