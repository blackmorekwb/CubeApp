@component('mail::message')
# Welcome to our Cuber community!

We are excited to join you on your journey
to becoming a speedcuber! 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
