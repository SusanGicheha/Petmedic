@role('superadministrator')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Create Admin')}}

</h2>

</x-slot>

<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
 <div class="mt-5 md:mt-0 md:col-span-2">

     <form action="{{route('users.store')}}" method="POST" >
            @csrf   
<div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Admin name" value="{{ old('name') }}" />
                            @if($errors->first('name'))
                <div class="alert-danger" style="color: red;">{{$errors->first('name')}}</div>
                @endif
                        </div> 
   
</div>
                        
          

                            
 <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="phone_no" class="block font-medium text-sm text-gray-700">Phone number</label>
                            <input type="tel" name="phone_no" id="phone_no" type="tel" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('phone_no') }}" />
                            @if($errors->first('phone_no'))
                <div class="alert-danger" style="color: red;">{{$errors->first('phone_no')}}</div>
                @endif
                            </div>
                          
</div>

<div class="shadow overflow-hidden sm:rounded-md">
                        <div class=" px-4 py-5 bg-white sm:p-6">
                        <label for="email" class=" block font-medium text-sm text-gray-700">Email</label>
                        <input type="email" name="email" id="email" type="email" class=" form-input rounded-md shadow-sm mt-1 block w-full"
                        value="{{ old('email') }}" />
                        </div>
</div>                                                      


<div class="shadow overflow-hidden sm:rounded-md">
                        <div class=" px-4 py-5 bg-white sm:p-6">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

 <div class="shadow overflow-hidden sm:rounded-md">
                        <div class=" px-4 py-5 bg-white sm:p-6">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
 <div class="shadow overflow-hidden sm:rounded-md">
                        <div class=" px-4 py-5 bg-white sm:p-6">
                <x-jet-label for="profile_photo_path" value="{{ __('Profile Picture') }}" />
                <x-jet-input id="profile_photo_path" class="block mt-1 w-full" type="file" name="profile_photo_path" :value="old('profilephoto')" required />
            </div>   




        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
           <x-jet-button type="submit">Create Admin</x-jet-button> 
         </div>

</form>
</div>
</div>
</x-app-layout>
@endrole

