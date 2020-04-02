@php
    $footerBefore = core()->getConfigData('dejavuejs.meta.configuration.footer_before');
@endphp

@if (core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $footerBefore !!}
@endif