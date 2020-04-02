@php
    $footerAfter = core()->getConfigData('dejavuejs.meta.configuration.footer_after');
@endphp

@if (core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $footerAfter !!}
@endif