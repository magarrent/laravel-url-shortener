<?php

use Magarrent\LaravelUrlShortener\Models\UrlShortener;

$shortUrls = UrlShortener::all();

foreach ($shortUrls as $url) {
    Route::redirect($url->url_key, $url->to_url, 301);
}
