<?php

namespace Rahmat\Rtimezone;

use Illuminate\Support\ServiceProvider;

class RtimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'Rtimezone');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/rahmat/Rtimezone'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/../routes.php';
        $this->app->make('Rahmat\Rtimezone\RtimezoneController');
    }
}
