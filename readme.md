
# Laravel Url Shortener

![Laravel Url Shortener](https://user-images.githubusercontent.com/6561770/128167953-443fd32f-5e11-4a07-aa53-7f6460466e83.png)

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/Magarrent/laravel-url-shortener.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/Magarrent/laravel-url-shortener.svg?style=flat-square)](https://packagist.org/packages/Magarrent/laravel-url-shortener)

## Install
`composer require magarrent/laravel-url-shortener`

## Usage
Import the UrlShortener in your php file.

    use Magarrent\LaravelUrlShortener\Models\UrlShortener;

Then you can use the Url shortener package to redirect **internal and external links.**

    UrlShortener::generateShortUrl("https://www.kodio.tech")
    
    UrlShortener::generateShortUrl("/my-next/local/page")

Ex. Redirection:

https://your.url/H8g9Jx => https://www.kodio.tech

-----
You only have to send the Url To param to the UrlShortener model:

    public  static  function  generateShortUrl(String $toUrl):  String


## Roadmap

- Add custom configuration for url key characters (Currently 6)

## Changelog
1.0 - First version

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marc Garcia Torrent (Kodio Technologies)](https://github.com/Magarrent)
- [All Contributors](https://github.com/Magarrent/laravel-url-shortener/contributors)

## Security
If you discover any security-related issues, please email magarrent@gmail.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.



