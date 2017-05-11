<?php

namespace ArjanWestdorp\Imaginary\Laravel\Test;

use ArjanWestdorp\Imaginary\Builder;
use ArjanWestdorp\Imaginary\Client;
use ArjanWestdorp\Imaginary\Laravel\Imaginary;

class ImaginaryTest extends TestCase
{
    protected $image = 'https://www.google.com/image.jpg';

    /** @test */
    function it_can_generate_an_imaginary_url()
    {
        $url = Imaginary::fetch($this->image)
            ->width(100)
            ->height(100)
            ->url();

        $this->assertEquals($this->getAssertedUrl('w_100,h_100'), $url);
    }

    /** @test */
    function it_can_generate_multiple_imaginary_urls()
    {
        $url = Imaginary::fetch($this->image)
            ->width(100)
            ->height(100)
            ->url();

        $this->assertEquals($this->getAssertedUrl('w_100,h_100'), $url);

        $url = Imaginary::fetch($this->image)->url();
        $this->assertEquals($this->getAssertedUrl(''), $url);

        $url = Imaginary::fetch($this->image)->circle()->url();
        $this->assertEquals($this->getAssertedUrl('r_max'), $url);
    }

    /** @test */
    function it_can_define_manipulation_sets()
    {
        Imaginary::define('square', function (Builder $builder) {
            $builder->width(100)
                ->height(100)
                ->fit();
        });

        $url = Imaginary::fetch($this->image)
            ->square();

        $this->assertEquals($this->getAssertedUrl('w_100,h_100,c_fit'), $url);
    }

    /**
     * Make the asserted url for the given manipulations.
     *
     * @param string $manipulations
     * @return string
     */
    protected function getAssertedUrl($manipulations)
    {
        $url = config('imaginary.url') . '/' . config('imaginary.client') . '/images/fetch/' . $manipulations;

        if (!empty($manipulations)) {
            $url .= '/';
        }

        $url .= $this->image;

        return $url;
    }
}