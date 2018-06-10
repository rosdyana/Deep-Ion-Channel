@component('mail::message') # Dear Mr/Ms {{ $name }}, 
Thank you for using our website, your ticket number is #{{ $id }}.
I hope you will send more protein samples so that we can enrich our database and improve the accuracy of the system. 
@component('mail::button',['url' => url('task/'. $id) ]) Your detailed task @endcomponent Thanks,

<br> {{ config('app.name') }} 
@endcomponent