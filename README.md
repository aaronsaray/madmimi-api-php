# madmimi-api-php
An up-to-date PHP library for integrating with the MadMimi API.

Using your <http://madmimi.com> account, you can interact with all parts of the API using this library.  This library
requires PHP 5.4+ and curl to be installed.

## Installation

This library is available on packagist and can be installed using composer.

** Coming soon ** 

## Basic Usage

This example sends a transactional email to a promotion named "Meaning of Life" and replaces the {answer} placeholder with
the answer to life, the universe and everything.  This email goes to Slartibartfast at iluvcoastlines@planetdesigners.com

```php
<?php

use MadMimi\Connection;
use MadMimi\Options\Mail\Transactional;

$connection = new Connection('your@email.com', 'your-api-key');

$options = new Transactional();
$options->setPromotionName('Meaning of Life')
  ->setPlaceholderValues(['answer'=>'42'])
  ->setTo('iluvcoastlines@planetdesigners.com', 'Slartibartfast');

$connection->request($options);
```

## Documentation

### Core
 - [The Connection Object](docs/connection.md)
 
### Sending Mail
 - [Transaction Mail Options](docs/mail/transactional.md)
 - [Mailing List Options](docs/mail/mailing-list.md)
 - [Import and Send to Mailing List Options](docs/mail/import-mailing-list.md)
 - [Send to All Options](docs/mail/send-to-all.md)
 
### Statistics / Status
 - [Transaction Mail Status](docs/stats/transactional.md)
 - [Mailing Stats](docs/stats/mailing.md) 
 - [Sent Stats](docs/stats/sent.md) 
 - [Abused Stats](docs/stats/abused.md) 
 - [Bounced Stats](docs/stats/bounced.md) 
 - [Clicked Stats](docs/stats/clicked.md) 
 - [Forwarded Stats](docs/stats/forwarded.md) 
 - [Links Stats](docs/stats/links.md) 
 - [Read Stats](docs/stats/read.md) 
 - [Unsubscribed Stats](docs/stats/unsubscribed.md) 
  
### Misc
  
In general, method calls, responses and organization of this API have been normalized using this library.  So, please check
the MadMimi documentation AND this code documentation before implementing a method.  Mostly they will translate the same, 
but from time to time there have been liberties taken in this library.

One such example is the transactional mailer status.  While this documentation is located under the mailer section, and
the end point contains the /mailer path, it has been moved to the stats section.  This particular call is not for sending
a mail, but instead, receiving the status of the particular email.  It seems to fit better with the statistics section.
  
## About

### Requirements

 - PHP 5.4+
 - Curl
 - MadMimi mailer API access
 
### Bugs and Feature Requests

Bugs and feature request are tracked on [GitHub](https://github.com/aaronsaray/madmimi-api-php/issues)

### Author

Aaron Saray - <http://aaronsaray.com>

### License

This library is licensed under the MIT License - see the [LICENSE](license) file for details

### Acknowledgements

We're using MadMimi in our work at <https://www.smallshopsunited.com> - stop by and check it out.  Also, special thanks
to the team at MadMimi who gave me access to the API for testing this library.  
