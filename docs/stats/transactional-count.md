# Get Transactional Email Count on a Date

Get a count of transactional emails sent by promotion on a specific date

## Transactional Count Options

[MadMimi's Transactional Count Documentation](https://madmimi.com/developer/statistics-api-methods) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`TransactionalCount::setPromotionName($promotionName)` - Sets the promotion name that is to be queried
`TransactionalCount::setDate(\DateTime $date)` - Sets the date to retrieve the count from.  This must be a PHP DateTime object

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
