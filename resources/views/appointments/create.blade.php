<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Create new appointment')}}

</h2>

</x-slot>

<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
 <div class="mt-5 md:mt-0 md:col-span-2">

     <form action="{{route('appointments.store')}}" method="POST" >
            @csrf   
<div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Please enter name of person attending the appointment" value="{{ old('name') }}" />
                            @if($errors->first('name'))
                <div class="alert-danger" style="color: red;">{{$errors->first('name')}}</div>
                @endif
                        </div> 
   
</div>
                        
            <label for="pet_name" class="hidden block font-medium text-sm text-gray-700">Pet Name</label>
            <input type="text" name="pet_name" id="pet_name" type="text" class="hidden form-input rounded-md shadow-sm mt-1 block w-full"value="{{ isset($user) ? $user->pet_name :old('pet_name') }}" readonly/>
            <input type="text" name="user_id" id="user_id" type="text" class="hidden form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($user) ? $user->id :old('user_id') }}"   />


                            
 <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone_number" class="block font-medium text-sm text-gray-700">Phone number</label>
                            <input type="tel" name="phone_number" id="phone_number" type="tel" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('phone_number') }}" />
                            @if($errors->first('phone_number'))
                <div class="alert-danger" style="color: red;">{{$errors->first('phone_number')}}</div>
                @endif
                            </div>
                          
</div>

<div class="shadow overflow-hidden sm:rounded-md">
                        <div class="hidden px-4 py-5 bg-white sm:p-6">
                        <label for="email_address" class="hidden block font-medium text-sm text-gray-700">Email</label>
                        <input type="email" name="email_address" id="email_address" type="email" class="hidden form-input rounded-md shadow-sm mt-1 block w-full"
                        value="{{ isset($user) ? $user->email :old('email_address') }}" />
                        </div>
</div>                                                      


<div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="date_time" class="block font-medium text-sm text-gray-700">Date & Time Of Appointment</label>
                            <input type="datetime-local" name="date_time" id="date_time" type="datetime-local" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('date_time') }}" />
                                   @if($errors->first('date_time'))
                <div class="alert-danger" style="color: red;">{{$errors->first('date_time')}}</div>
                @endif
                            </div>

</div>




        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
           <x-jet-button type="submit">Create Appointment</x-jet-button> 
         </div>

</form>
</div>
</div>
</x-app-layout>
