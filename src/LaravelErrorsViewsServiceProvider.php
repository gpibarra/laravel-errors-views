<?php

namespace gpibarra\LaravelErrorsViews;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Route;

class LaravelErrorsViewsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        // LOAD THE VIEWS
        // - first the published views (in case they have any changes)
        $this->loadViewsFrom(resource_path('views/errors'), 'errors');
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'errors');

        $this->loadTranslationsFrom(realpath(__DIR__.'/resources/lang'), 'errors');

        $this->publishFiles();
    }

    public function publishFiles()
    {
        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang')], 'lang');

        // publish error views
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/errors')], 'errors');

    }
}
