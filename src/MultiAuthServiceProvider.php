<?php

namespace Susheelbhai\MultiAuth;

use Illuminate\Support\ServiceProvider;

class MultiAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'multi_auth');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPublishable();
    }

    public function registerPublishable()
    {
        $this->publishes([
            __dir__ . "/" => app_path('/'),
            __dir__ . "/../database" => database_path('/'),
            __dir__ . "/../config" => config_path('/'),
            __dir__ . "/../routes" => base_path('/routes'),
            __DIR__.'/../resources/views' => base_path('resources/views'),
            __dir__ . "/../assets/images" => public_path('storage/images'),
            __dir__ . "/../assets/css" => public_path('storage/css'),
            __dir__ . "/../assets/js" => public_path('storage/js')
        ], 'multi_auth');
        $this->publishes([
            __dir__ . "/../assets" => public_path('storage')
        ], 'multi_auth_themes');
    }
}
