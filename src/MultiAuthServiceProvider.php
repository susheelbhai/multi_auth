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
            __dir__ . "/Http/Controllers" => app_path('Http/Controllers'),
            __dir__ . "/View" => app_path('View'),
            __dir__ . "/Mail" => app_path('Mail'),
            __dir__ . "/Http/Middleware" => app_path('Http/Middleware'),
            __dir__ . "/Http/Kernel.php" => app_path('Http/Kernel.php'),
            __dir__ . "/../database/factories" => database_path('factories'),
            __dir__ . "/../database/migrations" => database_path('migrations'),
            __dir__ . "/../database/seeders" => database_path('seeders'),
            __dir__ . "/../config" => config_path('/'),
            __DIR__.'/../resources/views' => base_path('resources/views'),
            __dir__ . "/../assets" => public_path('storage/theme/admin_theme1')
        ], 'multi_auth');
    }
}
