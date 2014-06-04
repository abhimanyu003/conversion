<?php namespace Abhimanyusharma003\Conversion;

use Illuminate\Support\Facades\Facade;

class ConversionFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'conversion';
    }

}