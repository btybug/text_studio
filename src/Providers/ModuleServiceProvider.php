<?php

namespace BtyBugPlugins\TextStudios\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'text_studio');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'text_studio');

//        \BtyBugPlugins\Cms\Models\Routes::registerPages('sahak.avatar/studios');

    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }
}
