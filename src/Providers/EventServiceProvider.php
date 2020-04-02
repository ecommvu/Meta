<?php

namespace Dejavuejs\Meta\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('bagisto.shop.layout.head', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::head');
        });

        Event::listen('bagisto.shop.layout.body.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::body-before');
        });

        Event::listen('bagisto.shop.layout.content.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::content-before');
        });

        Event::listen('bagisto.shop.layout.content.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::content-after');
        });

        Event::listen('bagisto.shop.layout.header.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::header-before');
        });

        Event::listen('bagisto.shop.layout.header.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::header-after');
        });

        Event::listen('bagisto.shop.layout.footer.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::footer-before');
        });

        Event::listen('bagisto.shop.layout.footer.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::footer-after');
        });

        Event::listen('bagisto.shop.layout.body.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::body-after');
        });
    }
}