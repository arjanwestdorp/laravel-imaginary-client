<?php

namespace ArjanWestdorp\Imaginary\Laravel;

use ArjanWestdorp\Imaginary\Client;
use Illuminate\Support\Facades\Facade;

/**
 * Class Imaginary
 * @package ArjanWestdorp\Imaginary\Laravel
 * @method static Client fetch(string $url)
 * @method static Client define(string $key, \Closure $callback)
 */
class Imaginary extends Facade
{
    /**
     * Get the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'imaginary.client';
    }
}