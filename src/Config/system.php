<?php

return [
    [
        'key' => 'dejavuejs',
        'name' => 'meta::app.dejavuejs',
        'sort' => 5,
    ], [
        'key' => 'dejavuejs.meta',
        'name' => 'meta::app.dejavuejs-meta',
        'sort' => 1
    ], [
        'key' => 'dejavuejs.meta.configuration',
        'name' => 'meta::app.meta-config',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'meta_status',
                'title' => 'meta::app.status',
                'type' => 'select',
                'options' => [
                    [
                        'title' => 'Active',
                        'value' => true
                    ], [
                        'title' => 'Inactive',
                        'value' => false
                    ]
                ],

                'channel_based' => false,
                'locale_based' => true
            ], [
                'name' => 'meta_seo',
                'title' => 'meta::app.seo',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.header-seo-help'
            ], [
                'name' => 'meta_css',
                'title' => 'meta::app.header-css',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.header-css-help'
            ], [
                'name' => 'meta_header_links',
                'title' => 'meta::app.header-links',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.header-links-help'
            ], [
                'name' => 'body_before',
                'title' => 'meta::app.body-before',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.body-before-help'
            ], [
                'name' => 'body_after',
                'title' => 'meta::app.body-after',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.body-after-help'
            ], [
                'name' => 'body_content_before',
                'title' => 'meta::app.body-content-before',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.body-content-before-help'
            ], [
                'name' => 'body_content_after',
                'title' => 'meta::app.body-content-after',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.body-content-after-help'
            ], [
                'name' => 'header_before',
                'title' => 'meta::app.header-before',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.header-before-help'
            ], [
                'name' => 'header_after',
                'title' => 'meta::app.header-after',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.header-after-help'
            ], [
                'name' => 'footer_before',
                'title' => 'meta::app.footer-before',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.footer-before-help'
            ], [
                'name' => 'footer_after',
                'title' => 'meta::app.footer-after',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => false,
                'info' => 'meta::app.footer-after-help'
            ]
        ]
    ]
];