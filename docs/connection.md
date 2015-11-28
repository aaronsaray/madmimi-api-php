# The Connection Object

The Connection object controls your interaction with the API.  You will need to create a new instance of this in order
to use the API.  You do NOT need to create a new instance each time you send a request to the API, though - it can
be reused.  The connection object also allows you to specify debug mode.

## Creating a Connection

```php
<?php
use MadMimi\Connection;

$connection = new Connection('your@email.com', 'your-api-key');
```

This `$connection` object is now ready to be used with any of it's public methods.

## Debugging

If you want to debug the connection object, simply pass a true value to the third argument of the constructor.  There
is a helpful constant to make this easier to read.  In the above example, you would alter your creation to look like this:

```php
$connection = new Connection('your@email.com', 'your-api-key', Connection::ENABLE_DEBUG);
```

Currently, the debug then sends debug messages to PHP standard-out.  This will be the console if you're using CLI, or
it will print to the HTML output if running through a webserver.

## Methods Available

- `Connection::send($options)` Send an email using one of the options.

## Exceptions and Errors

The following exceptions may be thrown throughout the duration of a connection object.  Each is in the namespace
`MadMimi\Exception`

- `AuthenticationException` Your email or API key is not valid, your account is suspended, or you cannot yet use this resource.  The exception message will give more details.
- `MissingPlaceholdersException` You attempted to send a transactional message to a promotion with placeholders but your request is missing one or more placeholders.
- `NoPromotionException` There was an attempt to send a message to a promotion that does not exist (most likely you may have forgotten to send raw html or plain text?)
- `TransferErrorException` There was a 404, 500 or some other type of error.  The message should have more.  This is most likely not a recoverable error.
