<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{asset('/image/PET MEDIC VETERINARY (1).png') }}" alt="logo" class="img-logo-w3" style="width:200px; height:200px;"  ></a>

        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <h1 align = "center">Register your details to open an account for your pet. </h1>
        <br>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="phone_no" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone_no" class="block mt-1 w-full" type="tel" name="phone_no" :value="old('phone_no')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

           
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="profile_photo_path" value="{{ __('Profile Picture') }}" />
                <x-jet-input id="profile_photo_path" class="block mt-1 w-full" type="file" name="profile_photo_path" :value="old('profilephoto')" required />
            </div>    
            <br>

            <h1 class="underline text-lg text-gray-600 hover:text-gray-900" align="center">ENTER YOUR PETS' DETAILS</h1>

<div class="mt-4">
    <x-jet-label for="pet_name" value="{{ __('Pet name') }}" />
    <x-jet-input id="pet_name" class="block mt-1 w-full" type="text" name="pet_name" :value="old('pet_name')" required />
</div>   

<div class="mt-4">
    <x-jet-label for="pet_breed" value="{{ __('Breed') }}" />
    <x-jet-input id="pet_breed" class="block mt-1 w-full" type="text" name="pet_breed" :value="old('pet_breed')" required />
</div>  

<div class="mt-4">
    <x-jet-label for="pet_gender" value="{{ __('Gender') }}" />
    <x-jet-input id="pet_gender" class="block mt-1 w-full" type="text" name="pet_gender" :value="old('pet_gender')" required />
</div>   




<div class="mt-4">
    <x-jet-label for="date_of_birth" value="{{ __('Date Of Birth') }}" />
    <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required />
</div>   



            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                
                <x-jet-button class="ml-4" onclick="myFunction()">
                    
                        
                    {{ __('Register') }}
                    
                </x-jet-button>
                <script>
                    function myFunction(){
                        alert("Registration successful");
                    }
                    </script>

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
