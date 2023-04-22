<?php

namespace Resham\NovaSearchSelect;

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('nova-search-select', __DIR__.'/../dist/css/nova-search-select.css');
        });
        $this->mapApiRoutes();
        $this->publishes([
            __DIR__.'/../resources/js/views' => base_path('vendor/laravel/nova/resources/js/views'),
        ], 'nova-search-select');
    }

    /**
     * Define the "api" routes of this package for the application.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::middleware('nova:api')
            ->domain(config('nova.domain', null))
            ->prefix('nova-api')
            ->name('nova.api.')
            ->group(__DIR__.'/../routes/api.php');
    }
}
