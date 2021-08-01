<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Appointment
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('appointments.update', $appointment->id) }}">
                    @csrf
                    @method('PUT')
                    @role('user')
                    <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" value="{{ isset($appointment) ? $appointment->name :old('name') }}"  class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Please enter name of person attending the appointment" value="{{ old('name') }}" />
                            @if($errors->first('name'))
                <div class="alert-danger" style="color: red;">{{$errors->first('name')}}</div>
                @endif
                </div> 

                        
            


                            
 <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone_number" class="block font-medium text-sm text-gray-700">Phone number</label>
                            <input type="tel" name="phone_number" id="phone_number" type="tel"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ isset($appointment) ? $appointment->phone_number :old('phone_number') }}"  />
                            @if($errors->first('phone_number'))
                <div class="alert-danger" style="color: red;">{{$errors->first('phone_number')}}</div>
                @endif
                            </div>


                                                        


<div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="date_time" class="block font-medium text-sm text-gray-700">Date & Time Of Appointment</label>
                                
                            <input type="datetime-local" name="date_time" id="date_time" type="datetime-local"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{isset($appointment) ? $appointment->date_time :old('date_time') }}" />
                                   @if($errors->first('date_time'))
                <div class="alert-danger" style="color: red;">{{$errors->first('date_time')}}</div>
                @endif
                            </div>
@endrole
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>