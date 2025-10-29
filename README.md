# A collection of beautiful website components.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/backstagephp/components.svg?style=flat-square)](https://packagist.org/packages/backstagephp/components)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/backstagephp/components/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/backstagephp/components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/backstagephp/components/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/backstagephp/components/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/backstagephp/components.svg?style=flat-square)](https://packagist.org/packages/backstagephp/components)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require backstagephp/components
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="components-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="components-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="components-views"
```

## Usage

```php
$components = new Backstage\Components();
echo $components->echoPhrase('Hello, Backstage!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mathieu](https://github.com/backstagephp)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
