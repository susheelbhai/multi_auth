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
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
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
            __DIR__.'/../resources/views' => base_path('resources/views'),
            __dir__ . "/../assets" => public_path('storage/themes')
        ], 'multi_auth');
    }
}
