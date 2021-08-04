<?php

namespace Magarrent\LaravelUrlShortener;

use Illuminate\Support\ServiceProvider;

class LaravelUrlShortenerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/url-shortener.php', 'url-shortener');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Load custom routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load config file
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/url-shortener.php' => config_path('url-shortener.php'),
            ], 'config');
        }
    }
}
