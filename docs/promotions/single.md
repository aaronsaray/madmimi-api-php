# Get Single Promotion

This gets an XML document with the specific promotion by the ID.

## Single Promotion Options

[MadMimi's Promotion Documentation](https://madmimi.com/developer/api/promotions) should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.  

### Method Reference

`Single::setPromotionId($promotionId)` - Sets the promotion ID to retrieve

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class
