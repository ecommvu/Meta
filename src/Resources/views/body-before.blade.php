@php
    $bodyBefore = core()->getConfigData('dejavuejs.meta.configuration.body_before');
@endphp

@if(core()->getConfigData('dejavuejs.meta.configuration.meta_status'))
    {!! $bodyBefore !!}
@endif