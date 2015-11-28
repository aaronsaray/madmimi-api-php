# Get Status Transactional Email

Since transactional emails are queued, bounced, etc, you might want to get the status of the email to keep your data up to date.

## Transactional Status Options

[MadMimi's Transactional Email Status Documentation](https://madmimi.com/developer/mailer/status) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

### Method Reference

`Transactional::setTransactionId($transactionId)` - Sets the transaction ID of the email you wish to query

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
