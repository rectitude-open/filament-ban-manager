# Filament Ban Manager

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rectitude-open/filament-ban-manager.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-ban-manager)
[![Tests](https://github.com/rectitude-open/filament-ban-manager/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rectitude-open/filament-ban-manager/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen)](https://phpstan.org/)
[![Total Downloads](https://img.shields.io/packagist/dt/rectitude-open/filament-ban-manager.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-ban-manager)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rectitude-open/filament-ban-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-ban-manager-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-ban-manager-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-ban-manager-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentBanManager = new Rectitudeopen\FilamentBanManager();
echo $filamentBanManager->echoPhrase('Hello, Rectitudeopen!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [rectitude-open](https://github.com/rectitude-open)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
