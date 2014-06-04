<?php namespace Abhimanyusharma003\Conversion;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class ConversionServiceProvider extends ServiceProvider {

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
        $this->app['conversion'] = $this->app->share(function ($app)
        {
            return new Conversion;
        });
    }

    public function boot()
    {
        $this->package('abhimanyusharma003/conversion');
        $this->app->booting(function ()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('Conversion', 'Abhimanyusharma003\Conversion\ConversionFacade');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('conversion');
    }

}
