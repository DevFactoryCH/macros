<?php

namespace Devfactory\Macros;

use Illuminate\Support\ServiceProvider;
use Form;

class MacrosServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/macros.php' => config_path('macros.php'),
        ]);

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/views/macros', 'macros');

        require 'macros.php';
    }

    /**
    * Register bindings in the container.
    *
    * @return void
    */
    public function register()
    {
        //
    }
}
