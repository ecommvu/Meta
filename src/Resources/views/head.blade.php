@php
    $seo = core()->getConfigData('dejavuejs.meta.configuration.meta_seo');

    $links = core()->getConfigData('dejavuejs.meta.configuration.meta_header_links');

    $css = str_replace(' ','', core()->getConfigData('dejavuejs.meta.configuration.meta_css'));
@endphp

@if(core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $seo !!}

    {!! $links !!}

    <style>
        {{ $css }}
    </style>
@endif