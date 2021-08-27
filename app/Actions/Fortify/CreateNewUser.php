<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Notifications\WelcomeEmailNotification;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'pet_name' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'string', 'max:255'],
            'pet_gender' => ['required', 'string', 'max:255'],
            'pet_breed' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'string','before:today', 'max:255'],
            'profile_photo_path' => ['required', 'string', 'max:255'],
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone_no' => $input['phone_no'],
            'pet_name' => $input['pet_name'],
            'pet_breed' => $input['pet_breed'],
            'pet_gender' => $input['pet_gender'],
            'date_of_birth' => $input['date_of_birth'],
            'profile_photo_path' => $input['profile_photo_path'],

     ]);
        $user->attachRole('user');
        $user->notify(new WelcomeEmailNotification());

        return $user;
    }
}
