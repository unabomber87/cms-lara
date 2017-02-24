<?php

namespace App\Providers;

use App\Services\MenuGen;
use Illuminate\Support\ServiceProvider;

class MenuGenServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app['menugen'] = $this->app->share(function ($app) {
        //     // $session = $app['session'];
        //     // $events = $app['events'];
        //     return new MenuGen();
        // });

        $this->app->singleton('menugen', function($app) {
            return new MenuGen();
        });

    }
}
