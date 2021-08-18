@component('mail::message')
Hello {{$name}}, <br>
Welcome to Pet Medic Medical Diary. <br>


To visit your Homepage, follow the link below
@component('mail::button', ['url' => $link])
Homepage
@endcomponent

Thanks <br>
Pet Medic
@endcomponent