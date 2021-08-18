@component('mail::message')
Hello,
New appointment set for {{$date_time}},  <br>


To view them, follow the link below
@component('mail::button', ['url' => $link])
View Appointment
@endcomponent

Thanks
Pet Medic
@endcomponent