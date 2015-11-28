# Sending an Email to a List

Some of the API fields have formats that are confusing or not as structured as a standard library might take advantage
of.  So, this options object tries to abstract some of this away from the user, while still allowing you to set the
values directly if you so wish.

The basic concept is simple for sending a mailing list email:
- Create a connection object
- Create a Mailing List Options object
- Populate the options object with your desired values using setter methods
- Call `Connection::send()` with your connection object as a parameter

## Mailing List Email Options

(MadMimi's Send to a List Documentation)[https://madmimi.com/developer/mailer/send-to-a-list] should give you an idea
of what you need to send to the API.  This options object makes some of the methods easier.

The following things are interesting to note about the options object:
- boolean values are used in the code - but are translated to the proper value for the API
- email addresses / display names are created automatically based on what you send to a setter method
- YAML creation is done automatically for methods that require it
- You can still create the object with an array of parameters to access the original values (say, if you already had a YAML string created, you could bypass the automated creation)

### Method Reference

`MailingList::setPromotionName($promotionName)` - Sets the promotion name that you are sending to or creating

`MailingList::setSubject($subject)` - Sets the subject of this message (if not set, the promotion name is the subject)

`MailingList::setFrom($email, $name = '')` - Add the from address.  If name is left out, does not add a display name

`MailingList::setPlaceholderValues([])` - An array of key is the {placeholder} name and the value is the replacement

`MailingList::setHTML($html)` - Send in raw HTML instead of using a pre-built promotion

`MailingList::setText($text)` - Send in plain text instead of using a pre-built promotion

`MailingList::setTrackLinks()` - Turn on or off link tracking

`MailingList::setHidden()` - Turn on or off hiding a created promotion from the dashboard

`MailingList::setLists([])` - An array of list names to mail

`MailingList::setPreventResend()` - Turn on or off preventing resend

`MailingList::setMergeData([])` - An array of merge data for this mailing

## Exceptions

The following exceptions may be thrown throughout the duration of a options object.  

- `MadMimi\Exception\InvalidOptionException` During options object creation, a value in the array of the constructor argument that's key was not defined as a protected property of this options class

- `\DomainException` If a non-boolean value was sent to one of the methods that expect a boolean value (remember, use true or false, not 'on' or 'off' - the library does this for you)
