<?php

namespace Dejavuejs\Meta\Listeners;

use Illuminate\Support\Facades\Event;

class Meta
{
    public function __construct()
    {
        if (core()->getConfigData('dejavuejs.meta.configuration.meta_status')) {
            return;
        }
    }

    public function handleHead()
    {
        Event::listen('bagisto.shop.layout.head', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::head');
        });
    }

    public function handleBodyBefore()
    {
        Event::listen('bagisto.shop.layout.body.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::body-before');
        });
    }

    public function handleBodyAfter()
    {
        Event::listen('bagisto.shop.layout.body.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::body-after');
        });
    }

    public function handleFooterBefore()
    {
        Event::listen('bagisto.shop.layout.footer.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::footer-before');
        });
    }

    public function handleFooterAfter()
    {
        Event::listen('bagisto.shop.layout.footer.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('meta::footer-after');
        });
    }
}