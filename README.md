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
use MadMimi\Options\Transactional;

$connection = new Connection('your@email.com', 'your-api-key');

$options = new Transactional();
$options->setPromotionName('Meaning of Life')
  ->setPlaceholderValues(['answer'=>'42'])
  ->setTo('iluvcoastlines@planetdesigners.com', 'Slartibartfast');

$connection->sendTransactional($options);
```

## Documentation

 - [The Connection Object](docs/connection.md)
 - [Transaction Mail Options](docs/transactional.md)
 
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
