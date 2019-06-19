<?php

namespace Smoetje\Pfverkooppunten;

use Illuminate\Support\ServiceProvider;

class PfVerkooppuntenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Smoetje\Pfverkooppunten\VerkooppuntenController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'verkooppunten');
        $this->publishes([
            __DIR__.'/js' => base_path('resources/js/components'),
        ]);
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views'),
        ]);
    }
}
