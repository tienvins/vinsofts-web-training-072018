<?php

namespace Tu\Test;

use Illuminate\Support\ServiceProvider;

class TuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Tu\Test\TuController');
        $this->loadViewsFrom(__DIR__.'/views', 'package');
    }
}
