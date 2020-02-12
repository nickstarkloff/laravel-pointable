<?php

namespace Starkloff\Pointable;

use Illuminate\Support\ServiceProvider;

class PointableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        
        $this->publishes([
            __DIR__.'/Database/Migrations/' => database_path('migrations')
        ], 'migrations');
    }
}
