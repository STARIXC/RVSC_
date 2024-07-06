@component('mail::message')


<p>
    Hello <br>

    Reservations;
</p>
<p>

    <b>{{ $reserve['last_name'].' '.$reserve['first_name'] }}</b><br>
    <b>Phone:</b> {{ $reserve['phone'] }}<br />
    <b>Email :</b> {{ $reserve['email'] }}<br />
    <b>Member Number:</b>{{ $reserve['member_number'] }}<br />
</p>
<p> 
would like to reserve a room as per the details bellow
</p>

<p><b>Room Type:</b> {{ $reserve['roomtype'] }}</p>
<p><b>No of Guests:</b> {{ $reserve['number_guest'] }} </p>
<p><b>Checkin Date:</b> {{ $reserve['check_in'] }}</p>
<p><b>Checkout Date:</b> {{ $reserve['checkout'] }}</p>
<p><b>Special Request:</b> {{ $reserve['specialrequest'] }}</p>
<p>Please confirm the availability of the said room</p>
@component('mail::button', ['url' => 'mailto:'.$reserve['email']])
Reply to {{ $reserve['email'] }}
@endcomponent

Thanks,<br>
{{ $reserve['last_name'].' '.$reserve['first_name'] }}
@endcomponent



