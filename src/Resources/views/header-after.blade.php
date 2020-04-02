@php
    $headerAfter = core()->getConfigData('dejavuejs.meta.configuration.header_after');
@endphp

@if (core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $headerAfter !!}
@endif