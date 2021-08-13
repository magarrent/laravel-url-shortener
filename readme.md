
# Laravel Url Shortener

![Laravel Url Shortener](https://user-images.githubusercontent.com/6561770/128169387-4c192224-79e6-46fc-a75b-ed18981e74e3.png)

![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)
![Package Size](https://img.shields.io/github/languages/code-size/magarrent/laravel-url-shortener)

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/magarrent)

## Install
`composer require magarrent/laravel-url-shortener`

Run migrations:

`php artisan migrate`

-----

## Configuration

If you want to configurate some package parameters, run vendor publish:

`php artisan vendor:publish --provider="Magarrent\LaravelUrlShortener\LaravelUrlShortenerServiceProvider"`

Change the Key Url length in the `url-shortener.php` config file:

```php
<?php

return [
    'url_key_length' => 6, // http://test.test/X-random-key-length
];

```

-----
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

- Ask me for more features! You can buy me a coffe too :)

## Changelog
### 1.0.2
- Add `getOriginalUrlFromKey` function to model
- Added configuration for Url key length

### 1.0 
- First version

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marc Garcia Torrent (Kodio Technologies)](https://github.com/Magarrent)
- [All Contributors](https://github.com/Magarrent/laravel-url-shortener/contributors)

## Security
If you discover any security-related issues, please email magarrent@gmail.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.



