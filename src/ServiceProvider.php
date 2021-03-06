<?php

namespace PavanKataria\OtaDistributionIos;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ota-distribution-ios');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/ota-distribution-ios'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
