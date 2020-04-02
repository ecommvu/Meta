<?php

namespace Dejavuejs\Meta\Providers;

use Illuminate\Support\ServiceProvider;
use Dejavuejs\Meta\Providers\EventServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'meta');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'meta');

        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Registers config
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );
    }
}
