# Opinionated Tailwind Forms for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codetheculture/forms.svg?style=flat-square)](https://packagist.org/packages/codetheculture/forms)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/codetheculture/forms/run-tests?label=tests)](https://github.com/codetheculture/forms/actions?query=workflow%3ATests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codetheculture/forms.svg?style=flat-square)](https://packagist.org/packages/codetheculture/forms)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require codetheculture/forms
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="CodeTheCulture\Forms\FormsServiceProvider" --tag="forms-config"
```

This is the contents of the published config file:

```php
return [
    'classes' => [
        'text' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm',
        'text_error' => 'block w-full mt-1 border-red-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm',
    ],
];
```

## Usage

```html
<x-culture-text name="name" :value="$user->name" required autocomplete="name" />
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

- [Josh Benham](https://github.com/joshbenham)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
