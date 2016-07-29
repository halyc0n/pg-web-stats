<?php

namespace Halyc0n\PgWebStats;

use Illuminate\Support\ServiceProvider;

class PgWebStatsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'pg-web-stats');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/halyc0n/pg-web-stats')
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Halyc0n\PgWebStats\PgWebStatsController');
    }
}