@component('mail::message')
Hello {{$name}}, <br>
Vaccination for {{$email}} has been updated <br>


To view all vaccinations, follow the link below
@component('mail::button', ['url' => $link])
Vaccinations
@endcomponent

Thanks <br>
Pet Medic
@endcomponent