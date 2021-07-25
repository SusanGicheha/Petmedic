<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Create new appointment')}}

</h2>

</x-slot>

<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('appointments.store') }}">

                <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pet_name" class="block font-medium text-sm text-gray-700">Pet Name</label>
                            <input type="text" name="pet_name" id="pet_name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"value="{{ old('pet_name') }}" />
                    
                           </div> 



                            
                            <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone_number" class="block font-medium text-sm text-gray-700">Phone number</label>
                            <input type="tel" name="phone_number" id="phone_number" type="tel" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('phone_number', '') }}" />
</div>

<div class="shadow overflow-hidden sm:rounded-md">
<div class="px-4 py-5 bg-white sm:p-6">
                                <label for="email_address" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="email" name="email_address" id="email_address" type="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email_address') }}" />
</div>
                                


<div class="shadow overflow-hidden sm:rounded-md">
<div class="px-4 py-5 bg-white sm:p-6">
                                <label for="date_of_appointment" class="block font-medium text-sm text-gray-700">Date Of Appointment</label>
                            <input type="date" name="date_of_appointment" id="date_of_appointment" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('date_of_appointment') }}" />
</div>

<div class="shadow overflow-hidden sm:rounded-md">
<div class="px-4 py-5 bg-white sm:p-6">
                                <label for="time_of_appointment" class="block font-medium text-sm text-gray-700">Time </label>
                            <input type="time" name="description" id="time_of_appointment" type="time" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('time_of_appointment') }}" />
</div>






        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" type="submit">
                                Create Appointment
                            </button>
         </div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>





</x-app-layout>
