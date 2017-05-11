<?php

namespace ArjanWestdorp\Imaginary\Laravel;

use ArjanWestdorp\Imaginary\Client;
use Illuminate\Support\ServiceProvider;

class ImaginaryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/imaginary.php' => config_path('imaginary.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/imaginary.php', 'imaginary'
        );

        $this->app->bind('imaginary.client', function () {
            return new Client(config('imaginary'));
        });
    }
}
