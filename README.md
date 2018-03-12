# zohoapi-sdk

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A modern SDK for PHP. Extends OAuth 2.0 library from **The League of Extraordinary Packages** 

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require connectgrid/zohoapi-sdk
```

## Usage

``` php
$skeleton = new connectgrid\zohoapi-sdk();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email webmaster@connectgrid.ca instead of using the issue tracker.

## Credits

- [Connect Grid Ltd][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/connectgrid/zohoapi-sdk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/connectgrid/zohoapi-sdk/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/connectgrid/zohoapi-sdk.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/connectgrid/zohoapi-sdk.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/connectgrid/zohoapi-sdk.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/connectgrid/zohoapi-sdk
[link-travis]: https://travis-ci.org/connectgrid/zohoapi-sdk
[link-scrutinizer]: https://scrutinizer-ci.com/g/connectgrid/zohoapi-sdk/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/connectgrid/zohoapi-sdk
[link-downloads]: https://packagist.org/packages/connectgrid/zohoapi-sdk
[link-author]: https://github.com/connectgrid
[link-contributors]: ../../contributors
