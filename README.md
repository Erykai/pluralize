# Database erykai/pluralize
[![Maintainer](http://img.shields.io/badge/maintainer-@alexdeovidal-blue.svg?style=flat-square)](https://instagram.com/alexdeovidal)
[![Source Code](http://img.shields.io/badge/source-erykai/pluralize-blue.svg?style=flat-square)](https://github.com/erykai/pluralize)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/erykai/pluralize.svg?style=flat-square)](https://packagist.org/packages/erykai/pluralize)
[![Latest Version](https://img.shields.io/github/release/erykai/pluralize.svg?style=flat-square)](https://github.com/erykai/pluralize/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Quality Score](https://img.shields.io/scrutinizer/g/erykai/pluralize.svg?style=flat-square)](https://scrutinizer-ci.com/g/erykai/pluralize)
[![Total Downloads](https://img.shields.io/packagist/dt/erykai/pluralize.svg?style=flat-square)](https://packagist.org/packages/erykai/pluralize)

Converts plural words to singular and singular to plural


## Installation

Composer:

```bash
"erykai/pluralize": "1.0.*"
```

Terminal

```bash
composer require erykai/pluralize
```

Pluralize

```php
use \Erykai\Pluralize;
require "vendor/autoload";
echo (new Pluralize())->plural('friend')
//print friends
```

Singularize

```php
use \Erykai\Pluralize;
require "vendor/autoload";
echo (new Pluralize())->plural('friends')
//print friend
```


## Contribution

All contributions will be analyzed, if you make more than one change, make the commit one by one.

## Support


If you find faults send an email reporting to webav.com.br@gmail.com.

## Credits

- [Alex de O. Vidal](https://github.com/alexdeovidal) (Developer)
- [All contributions](https://github.com/erykai/pluralize/contributors) (Contributors)

## License

The MIT License (MIT). Please see [License](https://github.com/erykai/pluralize/LICENSE) for more information.
