@php
    $contentBefore = core()->getConfigData('dejavuejs.meta.configuration.body_content_before');
@endphp

@if (core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $contentBefore !!}
@endif