<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Add Vaccination')}}

</h2>

</x-slot>

<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
 <div class="mt-5 md:mt-0 md:col-span-2">

     <form action="{{route('vaccinations.store')}}" method="POST" >
            @csrf   
<!-- select user -->
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">User Id</label>
                            <input type="number" name="user_id" id="user_id" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('user_id') }}"   />
                          
   
</div>
<!-- Name of vaccine -->     
<div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Name of the Vaccine" value="{{ old('name') }}" />
                            @if($errors->first('name'))
                <div class="alert-danger" style="color: red;">{{$errors->first('name')}}</div>
                @endif
                        </div> 
   
</div>

    <!--vaccine description-->                        
 <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone_number" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('description') }}" />
                            @if($errors->first('description'))
                <div class="alert-danger" style="color: red;">{{$errors->first('description')}}</div>
                @endif
                            </div>
                          
</div>                                            
<!--frequency-->
<div class="shadow overflow-hidden sm:rounded-md">
<div class="px-4 py-5 bg-white sm:p-6">
    <!--error
-->
<label for="frequency" class="block font-medium text-sm text-gray-700">Frequency</label>
<input type="text" name="frequency" id="frequency" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   placeholder="Annual, Monthly or Quarterly " value="{{ old('frequency') }}" />
        </div>
</div>
<!--previous date-->
<div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="previous_date" class="block font-medium text-sm text-gray-700">Previously Given</label>
                            <input type="date" name="previous_date" id="previous_date" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('previous_date') }}" />
                                   @if($errors->first('previous_date'))
                <div class="alert-danger" style="color: red;">{{$errors->first('previous_date')}}</div>
                @endif
                            </div>

</div>
<!-- next date-->
<div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="next_date" class="block font-medium text-sm text-gray-700">Next Date</label>
                            <input type="date" name="next_date" id="next_date" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('next_date') }}" />
                                   @if($errors->first('next_date'))
                <div class="alert-danger" style="color: red;">{{$errors->first('next_date')}}</div>
                @endif
                            </div>

</div>





        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
           <x-jet-button type="submit">Add</x-jet-button> 
         </div>

</form>
</div>
</div>
</x-app-layout>
