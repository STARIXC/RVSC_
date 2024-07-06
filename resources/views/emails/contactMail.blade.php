@component('mail::message')
# Introduction
<b>Name</b> {{ $data['name'] }}
<b>Email</b> {{ $data['email'] }}
<b>Phone</b> {{ $data['phone'] }}
<b>Subject</b> {{ $data['subject'] }}
<b>Message</b> {{ $data['message'] }}


@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply to {{ $data['name'] }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
