<?php

namespace Gi\HelloWorld\ServiceProviders;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class HelloWorld extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @author Ardiansyah setiawan suci
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/../Views', 'gi/hello_world');


        if (!$this->app->routesAreCached()) {

            require __DIR__ . '/../Route/web.php';
        }

    }

    public static function getAttributeMenu()
    {
        return [
            'hello word' => '/hw'
        ];
    }

    
}