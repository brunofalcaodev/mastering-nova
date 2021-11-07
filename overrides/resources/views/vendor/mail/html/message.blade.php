@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['data' => $data])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ course()->name }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
