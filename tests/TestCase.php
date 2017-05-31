<?php

namespace ArjanWestdorp\Imaginary\Laravel\Test;

use ArjanWestdorp\Imaginary\Laravel\ImaginaryServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        $this->app['config']->set('imaginary.client', 'client');
        $this->app['config']->set('imaginary.url', 'https://img.ina.ry');
    }

    /**
     * Get the package service providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ImaginaryServiceProvider::class,
        ];
    }
}