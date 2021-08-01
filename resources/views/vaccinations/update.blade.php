<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Vaccination
        </h2>
    </x-slot>

    
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('vaccinations.update', $vaccination->id) }}">
                    @csrf
                    @method('PUT')
                    <!-- select user -->
<div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_id" class="block font-medium text-sm text-gray-700">User Id</label>
                            <input type="number" name="user_id" id="user_id" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($vaccination) ? $vaccination->user_id :old('user_id') }}"   />

<!--change name -->
<div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" value="{{ isset($vaccination) ? $vaccination->name :old('name') }}"  class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Please enter name of person attending the appointment" value="{{ old('name') }}" />
                            @if($errors->first('name'))
                <div class="alert-danger" style="color: red;">{{$errors->first('name')}}</div>
                @endif
                </div> 
    <!--vaccine description-->                        
    <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone_number" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ isset($vaccination) ? $vaccination->description :old('description') }}"/>
                            @if($errors->first('description'))
                <div class="alert-danger" style="color: red;">{{$errors->first('description')}}</div>
                @endif
                            </div>
                        
    <!--frequency-->
<div class="shadow overflow-hidden sm:rounded-md">
<div class="px-4 py-5 bg-white sm:p-6">
<label for="frequency" class="block font-medium text-sm text-gray-700">Frequency</label>
<input type="text" name="frequency" id="frequency" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   placeholder="Annual, Monthly or Quarterly " value="{{ isset($vaccination) ? $vaccination->frequency :old('frequency') }}"/>
        </div>
</div>

<!--previous date-->
<div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="previous_date" class="block font-medium text-sm text-gray-700">Previously Given</label>
                            <input type="date" name="previous_date" id="previous_date" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{isset($vaccination) ? $vaccination->next_date :old('previous_date') }}"  />
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
                            value="{{isset($vaccination) ? $vaccination->next_date :old('next_date') }}" />
                                   @if($errors->first('next_date'))
                <div class="alert-danger" style="color: red;">{{$errors->first('next_date')}}</div>
                @endif
                            </div>

</div>



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