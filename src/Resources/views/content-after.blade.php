@php
    $contentAfter = core()->getConfigData('dejavuejs.meta.configuration.body_content_after');
@endphp

@if (core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $contentAfter !!}
@endif