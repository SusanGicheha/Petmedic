<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <style>

        
            .body {
                font-family: 'Nunito', sans-serif;
                background-repeat: no-repeat; 
                background-size: 2000px;
            }
            .content{
              border-color:black;
              background-color: white;
            }
       
           .main{
            font-family: 'Montserrat', sans-serif;
            width: auto;
	          height: 80%;
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
<x-app-layout>
 
</x-app-layout>  
<br>
<br>
<br>
    <div class="py-12">
       
        <div>
            
            <div class="main">
               
            <div id="image" align="center" style="padding:50px;">
            <img src="{{asset('/image/profile.svg') }}" class="block h-20 w-auto"  /> </div>

            @role('user')
            <table align="center" >
        <br>
        <h1 class="text-center"><b>{{ $users->pet_name }}'s details </b></h1>

               
                <div style="border-color:black; margin-top:10px; ">
                <table class="content" style="width:50%"  align="center" >
  <tr>
    <th class="border px-4 py-2" >Breed</th>
    <th class="border px-4 py-2">Gender</th>
    <th class="border px-4 py-2 ">D.O.B</th>
  </tr>
  <tr>
    <td class="border px-4 py-2">{{ $users->pet_breed }}</td>
    <td class="border px-4 py-2 ">{{ $users->pet_gender }}</td>
    <td class="border px-4 py-2 ">{{ $users->date_of_birth }}</td>
  </tr>
</table> 

<x-jet-button class="mt-6" >Medical Records</x-jet-button>
<x-jet-button><a type="button" href="{{ route('appointments.index') }}"
                            class="px-0 py-0 ">
                            Book  Appointment</a></x-jet-button>
<x-jet-button class="mt-6" ><a type="button" href="{{ route('vaccinations.show') }}"
                            class="px-0 py-0 ">Upcoming Vaccinations</a></x-jet-button>

@endrole
@role('administrator')
<h1 class="text-center"><b>Admin Panel</b></h1>
<x-jet-button class="mt-6" ><a type="button" href="{{ route('users.index') }}"
                            class="px-0 py-0 ">All Users</a></x-jet-button><br>
<x-jet-button class="mt-6"><a type="button" href="{{ route('appointments.index') }}"
                            class="px-0 py-0 ">
                           View Appointments</a></x-jet-button><br>
<x-jet-button class="mt-6" ><a type="button" href="{{ route('vaccinations.index') }}"
                            class="px-0 py-0 ">Update Vaccinations</a></x-jet-button>
@endrole


</body>
</html>
