# Save a Promotion

This saves a promotion - and returns a string with the ID of the promotion when completed.

## Search Promotion Options

[MadMimi's Promotion Documentation](https://madmimi.com/developer/api/promotions) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.  

### Method Reference

`Save::setName($name)` - Set the name of the promotion

`Save::setUrl($url)` - A URL that contains the content for the mailing

`Save::setHTML($html)` - Send in raw HTML for this promotion

`Save::setText($text)` - Send in plain text for this promotion

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
