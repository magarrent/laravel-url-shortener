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
        //
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
    }
}
