@php
    $bodyAfter = core()->getConfigData('dejavuejs.meta.configuration.body_after');
@endphp

@if (core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $bodyAfter !!}
@endif