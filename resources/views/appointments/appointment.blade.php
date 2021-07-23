<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style>
            body {
                font-family: 'Nunito', sans-serif;
                background-repeat: no-repeat;
                background-image: url("/image/dog2 (1).png");
                background-size: 1500px;
            }
            .main{
            font-family: 'Montserrat', sans-serif;
            width:auto;
	        height: 580px;
            line-height: 1rem;
            background: url('image/dog2 (1).png');
            
           background-color: white;
            border-width: 2px;
            margin-top: 0.75rem;
            border-style: double;
           
            text-align: center;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin:auto;
            color: black;
            
          
        }
           
            </style>

</head>
<body>

<form method="POST" action=" ">
<x-jet-validation-errors class="mb-4" />
    <div class="main"> 


            <div class="mt-4">
                <x-jet-label for="name" class="block uppercase text-xs font-bold mb-2" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" wire:model.defer="state.name"
            />
            </div>
             <div class="mt-4">
                <x-jet-label for="phone_number" class="block uppercase text-xs font-bold mb-2" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="date_of_appointment" class="block uppercase text-xs font-bold mb-2" value="{{ __('Date') }}" />
                <x-jet-input id="date_of_appointment" class="block mt-1 w-full" type="date" name="date_of_appointment" :value="old('date_of_appointment')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="time" class="block uppercase text-xs font-bold mb-2" value="{{ __('Time') }}" />
                <x-jet-input id="time" class="block mt-1 w-full" type="time" name="time" :value="old('time')" required autofocus autocomplete="name" />
            </div>

            
            </div>

            







</form> 
</body>
</html>