@php
    $headerBefore = core()->getConfigData('dejavuejs.meta.configuration.header_before');
@endphp

@if (core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $headerBefore !!}
@endif