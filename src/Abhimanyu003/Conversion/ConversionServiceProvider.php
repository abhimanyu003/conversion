<?php namespace Abhimanyu003\Conversion;

use Illuminate\Support\ServiceProvider;

class ConversionServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('conversion', function ($app) {
            return new Conversion;
        });
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['conversion'];
    }
}
