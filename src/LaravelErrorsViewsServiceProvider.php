<?php

namespace gpibarra\LaravelErrorsViews;

use Illuminate\Support\ServiceProvider;

class LaravelErrorsViewsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // LOAD THE VIEWS
        // - first the published views (in case they have any changes)
        $this->loadViewsFrom(resource_path('views/errors'), 'errors');
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'errors');

        $this->loadTranslationsFrom(realpath(__DIR__.'/resources/lang'), 'errors');

        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang')], 'lang');

        // publish error views
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/errors')], 'errors');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
