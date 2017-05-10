# Laravel imaginary client
[![Latest Stable Version](https://poser.pugx.org/arjanwestdorp/laravel-imaginary-client/v/stable?format=flat-square)](https://packagist.org/packages/arjanwestdorp/laravel-imaginary-client)
[![License](https://poser.pugx.org/arjanwestdorp/laravel-imaginary-client/license?format=flat-square)](https://packagist.org/packages/arjanwestdorp/laravel-imaginary-client)
[![Build Status](https://img.shields.io/travis/arjanwestdorp/laravel-imaginary-client/master.svg?style=flat-square)](https://travis-ci.org/arjanwestdorp/laravel-imaginary-client)
[![Quality Score](https://img.shields.io/scrutinizer/g/arjanwestdorp/laravel-imaginary-client.svg?style=flat-square)](https://scrutinizer-ci.com/g/arjanwestdorp/laravel-imaginary-client)
[![Coverage](https://img.shields.io/scrutinizer/coverage/g/arjanwestdorp/laravel-imaginary-client.svg?style=flat-square)](https://scrutinizer-ci.com/g/arjanwestdorp/laravel-imaginary-client)

This package is a Laravel implementation of the [imaginary client](https://github.com/arjanwestdorp/imaginary-client).More information about this client can be found on [https://github.com/arjanwestdorp/imaginary-client](https://github.com/arjanwestdorp/imaginary-client)

## Installation

The recommended way to install the client is through composer:
~~~
composer require arjanwestdorp/imaginary-client
~~~

Register the service provider and optionally the facade:
~~~php
// config/app.php
 
'providers' => [
    ...
    ArjanWestdorp\Imaginary\Laravel\ImaginaryServiceProvider::class,
];
 
'aliases' => [
    ...
    'Imaginary' => ArjanWestdorp\Imaginary\Laravel\Imaginary::class,
];
~~~

Finally you'll need to add these two keys to your `.env` file:
```
IMAGINARY_CLIENT=
IMAGINARY_URL=
```

Optionally you can publish the config file:
~~~ 
php artisan vendor:publish --provider="ArjanWestdorp\Imaginary\Laravel\ImaginaryServiceProvider" --tag="config"
~~~

## Security

If you discover any security issues, please email arjanwestdorp@gmail.com instead of creating an issue.

## Credits

- [Arjan Westdorp](https://github.com/arjanwestdorp)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

