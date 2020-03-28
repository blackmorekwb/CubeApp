@component('mail::message')
# Feedback from {{ Auth::user()->name }}

Todo: get form input data from user

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
