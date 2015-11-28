# Sending a Transactional Email

Some of the API fields have formats that are confusing or not as structured as a standard library might take advantage
of.  So, this options object tries to abstract some of this away from the user, while still allowing you to set the
values directly if you so wish.

The basic concept is simple for sending a transactional email:
- Create a connection object
- Create a Transactional Options object
- Populate the options object with your desired values using setter methods
- Call `Connection::send()` with your connection object as a parameter - a simple example is located on the main documentation page

## Transactional Email Options

(MadMimi's Transactional Email Documentation)[https://madmimi.com/developer/mailer/transactional] should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

The following things are interesting to note about the options object:
- boolean values are used in the code - but are translated to the proper value for the API
- email addresses / display names are created automatically based on what you send to a setter method
- YAML creation is done automatically for methods that require it
- You can still create the object with an array of parameters to access the original values (say, if you already had a YAML string created, you could bypass the automated creation)

### Method Reference

`Transactional::setPromotionName($promotionName)` - Sets the promotion name that you are sending to or creating

`Transactional::setSubject($subject)` - Sets the subject of this message (if not set, the promotion name is the subject)

`Transactional::setTo($email, $name = '')` - Add the recipient address.  If name is left out, does not add a display name

`Transactional::setFrom($email, $name = '')` - Add the from address.  If name is left out, does not add a display name

`Transactional::setCc($email)` - Add a cc address. This does not accept a display name

`Transactional::setBcc($email)` - Add a bcc address. This does not accept a display name

`Transactional::setSender($email, $name = '')` - Add the sender address - used in the header of the email.  If name is left out, does not add a display name

`Transactional::setPlaceholderValues([])` - An array of key is the {placeholder} name and the value is the replacement

`Transactional::setHTML($html)` - Send in raw HTML instead of using a pre-built promotion

`Transactional::setText($text)` - Send in plain text instead of using a pre-built promotion

`Transactional::setCheckSuppressed()` - Turn on or off checking for suppression

`Transactional::setTrackLinks()` - Turn on or off link tracking

`Transactional::setHidden()` - Turn on or off hiding a created promotion from the dashboard

`Transactional::setSkipPlaceholders()` - Turn on or off skipping replacement of placeholders

`Transactional::addRecipientToLists([])` - An array of list names to add the recipient (your setTo()) to

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class

- `\DomainException` If a non-boolean value was sent to one of the methods that expect a boolean value (remember, use true or false, not 'on' or 'off' - the library does this for you)
